<?php

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $user = User::first();

    // Set role to admin
    $user->role()->associate(Role::first());
    $user->save();

    dd($user->toArray(), $user->role->toArray());
});

Route::get('/admin', function () {
    $user = auth()->user();

    dd($user->toArray(), $user->role->toArray());
})->middleware('auth', 'role:admin');

Route::get('/super-admin', function () {
    $user = auth()->user();

    dd($user->toArray(), $user->role->toArray());
})->middleware('auth', 'role:super-admin');


Route::get('/login', function () {
    $user = User::first();

    auth()->login($user);
    request()->session()->regenerate();

    return 'Logged in';
});

Route::get('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return 'Logged out';
});
