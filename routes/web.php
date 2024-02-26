<?php

use Illuminate\Support\Facades\Route;
use inertia\inertia;
use App\Models\User;
use App\Http\Controllers\Auth\LoginController;

Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'store']);
Route::post('logout', [LoginController::class, 'destroy'])->middleware('auth');

Route:: middleware('auth')->group(function () {

    Route::get('/', function () {
        return inertia::render('Home');
    });


});





Route::get('/users', function () {

    // sleep(2);

    // return User::paginate(10);

    return inertia::render('Users/Index', [
        'users' => User::query()
        ->when(Request::input('search'), function ($query,$search){
            $query->where('name', 'like', "%{$search}%");
        })
        ->paginate(10)
        ->withQueryString()
            ->through(fn($user) => [
                'id' => $user->id,
                'name' => $user->name
            ]),
        
        'filters' =>Request::only(['search'])
    ]);
});


Route::get('/users/create', function () {
    return inertia::render('Users/Create');
});


Route::post('/users', function () {
   //validate
  $attributes =  Request::validate([
    'name' => 'required',
    'email' => ['required', 'email'],
    'password' => 'required',
   ]);

   //create the user
   User::create($attributes);

   //redirect 

   return redirect('/users');
});


Route::get('/settings', function () {
    return inertia::render('Settings');
});

// Route::post('/logout', function () {
//     dd('logging the user out');
// });






