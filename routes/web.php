<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


// USING THE ROUTE METHOD from Oreilly Training called: Laravel from Scratch
Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return '<h1>Available Jobs</h1>';
})->name('jobs');


// Video named: Request Object & Query Params
Route::get('/test', function (Request $request) {
    return [
        'method' => $request->method(),
        'url' => $request->url(),
        'path' => $request->path(),
        'fullUrl' => $request->fullUrl(),
        'ip' => $request->ip(),
        'userAgent' => $request->userAgent(),
        'header' => $request->header()
    ];
});

Route::get('/users', function (Request $request) {
    // return $request->query('name'); // Gives us only name
    // return $request->only(['name','age']); // Gives us only name and age
    // return $request->all(); // Gives us all the query parameters
    // return $request->has('name'); // Checks if the query parameters has name.
    // return $request->has('filter'); // Checks if the query parameters has name.
    // return $request->input('name'); // Works with query parameters and form fields.
    return $request->except('name'); // Works with query parameters and form fields.
});
