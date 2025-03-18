<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/post', function () {
    return view('post');
});

Route::post('/post', function (Request $request) {
    $name = $request->name;
    return json_encode(['name' => $name]);
});

Route::get('/home', function () {
    return view('home');
});

//Http Response
Route::get('/response', function () {
    return response()->json(['name' => 'Tavon']);


});

Route::get('/products', function () {
    $products = [
        ['id' => 1, 'name' => 'Product 1'],
        ['id' => 2, 'name' => 'Product 2'],
        ['id' => 3, 'name' => 'Product 3'],
    ];
    return response()->json(['products' => $products]);
});
