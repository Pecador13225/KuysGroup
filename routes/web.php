<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Homepage route
Route::get('/', function () {
    $users = User::all();
    return view('welcome', compact('users'));
});

// Rene's biography route
Route::get('/BSIT-3A/rene', function () {
    return view('rene'); 
});
