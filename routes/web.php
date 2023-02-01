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

    // add admin role to user
    $user->roles()->sync(Role::first());

    dd($user->toArray(), $user->roles->toArray());
});


Route::get('/admin', function () {
    return 'Admin';
})->middleware('auth','role:admin');


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
