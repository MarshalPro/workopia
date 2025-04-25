<?php

use Illuminate\Support\Facades\Route;


// Oreilly Training : Laravel from Scratch
// Chapter 4: Views & Controllers
// Video named: Create & Display Views
Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return view('jobs.index');
})->name('jobs');


Route::get('/jobs/create', function () {
    return view('jobs.create');
})->name('jobs.create');



