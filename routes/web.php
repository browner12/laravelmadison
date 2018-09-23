<?php

Route::get('/', 'MainController@home');

Route::get('contributions', 'ContributionsController@index');
