@extends('layouts.master')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-12 mb-3">
                <div class="text-center font-weight-bold" style="font-size: 3rem; ">Laravel Contributions</div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <div class="text-center" style="font-size: 2rem; ">for {{ $user }}</div>
            </div>
        </div>

        <div class="row">
            @foreach($repos as $repo => $value)
                <div class="col-12 col-md-3 mb-4">
                    <div class="bg-light border rounded text-center p-3">
                        <div class="font-weight-bold">{{ ucfirst($repo) }}</div>
                        <div style="font-size: 3rem; ">{{ $value }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
