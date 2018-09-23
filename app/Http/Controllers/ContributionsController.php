<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ContributionsController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $client = new Client([
            'base_uri' => 'https://api.github.com',
            'timeout'  => 100.0,
            'auth'     => [config('services.github.user'), config('services.github.password')],
        ]);

        $user = $request->query('user', 'browner12');

        $repositories = [
            'framework',
            'laravel',
            'docs',
            'cashier',
            'dusk',
            'echo',
            'elixir',
            'homestead',
            'horizon',
            'installer',
            'lumen',
            'passport',
            'scout',
            'socialite',
            'tinker',
            'valet',
        ];

        //collect data from api
        foreach ($repositories as $repository) {

            $repos[$repository] = collect(json_decode($client->get('/repos/laravel/' . $repository . '/stats/contributors')->getBody()))->sortByDesc('total')->values()->search(function ($item, $key) use ($user) {
                return $item->author->login === $user;
            });
        }

        //turn into a collection
        $repos = collect($repos);

        //fix values
        $repos = $repos->map(function ($item, $key) {

            if ($item === false) {
                return 'N/A';
            }

            return $item + 1;
        });

        //load view
        return view('contributions', compact('user', 'repos'));
    }
}
