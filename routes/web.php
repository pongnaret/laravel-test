<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $title = 'About';
    return view('about', compact('title'));
});

Route::get('/contact', function () {
    $name = 'Tavon';
    $age = 20;
    $salary = 1000;

    return view('contact', compact('name', 'age', 'salary'));
});

Route::get('/profile', function () {
    return view('profile', ['name' => 'Tavon', 'age' => 20]);
});

Route::get('/params/{name}/{age}/{salary}', function ($name, $age, $salary) {
    return view('params', compact('name', 'age', 'salary'));
});
