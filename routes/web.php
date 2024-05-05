<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListBrgController;

Route::get('/', function () {
    return view('home');
    // return file_get_contents(public_path('index.html'));
});

Route::get('home', function () {
    return view('home');
});
Route::resource('listbarang', ListBrgController::class);
// Route::get('/test', function() {
//     return file_get_contents(public_path('index.html'));
//     });
