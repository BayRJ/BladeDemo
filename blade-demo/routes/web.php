<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {

    $users = [
        ['name' => 'Alex',
        'age' => 30,],
        ['name' => 'Dan',
        'age' => 25,],
        ['name' => 'John',
        'age' => 17,]

    ];
    return view('dashboard',['users' => $users]);
});
