<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// USING THE ROUTE METHOD from Oreilly Training called: Laravel from Scratch
// Route::get('/jobs', function () {
//     return '<h1>Available Jobs</h1>';
// });

// Route::post('/submit', function () {
//     return 'Form Submitted';
// });


// // For specific routes, you can use the match method to handle multiple HTTP methods
// // For example, if you want to handle both GET and POST requests for the same route:
// Route::match(['get', 'post'] , '/submit', function () {
//     return 'Form Submitted';
// });



// // You can also use the any method to handle all HTTP methods for a specific route:
// // This is useful for APIs or when you want to handle all types of requests in the same way:
Route::any('/submit', function () {
    return 'Form Submitted';
});


Route::get('/jobs', function () {
    return '<h1>Available Jobs</h1>';
})->name('jobs');

Route::get('/test', function() {
    $url= route('jobs');
    return "<a href='$url'>Click Here</a>";
});

// Building a backend API using Laravel
Route::get('/api/users', function () {
    return [
        'name' => 'Mustafa Karrokhi',
        'email' => 'mustafa-mcsd@hotmail.com'
    ];
});


// TODO: Follow along with the video named: Route Parameters
