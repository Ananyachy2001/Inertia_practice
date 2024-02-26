<?php

use Illuminate\Support\Facades\Route;
use inertia\inertia;
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

Route::get('/', function () {
    return inertia::render('Home');
});

Route::get('/users', function () {

    // sleep(2);

    // return User::paginate(10);

    return inertia::render('Users', [
        'users' => User::paginate(10)->through(fn($user) => [
            'id' => $user->id,
            'name' => $user->name
        ])
    ]);
});

Route::get('/settings', function () {
    return inertia::render('Settings');
});

Route::post('/logout', function () {
    dd('logging the user out');
});


