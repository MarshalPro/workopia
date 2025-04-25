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


// Video named: Response Helper
// Route::get('/test', function() {
//     return response("You are Hafiz Quran", 200);
// });

// // Minute 3:18 Content Type with the request
// Route::get('/test', function() {
//     // return response("<h1>You are Hafiz Quran</h1>", 200)->header('Content-Type', 'text/plain');
//     return response("<h1>You are Hafiz Quran</h1>", 200)->header('Content-Type', 'text/html');
// });


Route::get('/notfound', function() {
    return response('Page Not Found', 404);
});

// Minute 4:15 Content Type with the request
Route::get('/test', function() {
    return response()->json(['name' => 'Mustafa Karrokhi', 'age' => 40])->cookie('name', 'Mustafa Karrokhi');
});

Route::get('/download', function () {
    return response()->download(public_path('favicon.ico'));
});

Route::get('/read-cookie', function(Request $request) {
    $cookieValue = $request->cookie('name');
    return response()->json(['cookie' => $cookieValue]);
});
