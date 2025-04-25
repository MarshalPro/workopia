<?php

use Illuminate\Support\Facades\Route;


// Oreilly Training : Laravel from Scratch
// Chapter 4: Views & Controllers
// Video named: Passing Data to Views
Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    $title = 'Available Jobs';
    $jobs = [
        'Database Admin',
        'Software Engineer',
        'Systems Analyst',
        'Web Developer',
    ];
    return view('jobs.index', compact('title', 'jobs'));
})->name('jobs');


Route::get('/jobs/create', function () {
    return view('jobs.create');
})->name('jobs.create');



