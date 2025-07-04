<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|-------------------------------------
|  Web routes
|-------------------------------------
*/
Route::controller(UserController::class)->group(function () {

    /* ---------- Home / list ---------- */
    Route::get('/', 'showUsers')->name('home');               // ← give it a name

    /* ---------- View one user ---------- */
    Route::get('/user/{id}',        'singleUsers')->name('view.user');

    /* ---------- Add user ---------- */
    Route::get('/add-user',         'createUser')->name('addUser.form'); // show form
    Route::post('/add-user',        'addUsers') ->name('addUser');       // handle POST

    /* ---------- Update user ---------- */
    Route::get('/update/{id}',      'updatepage')->name('update.page');  // edit page
    Route::put('/update/{id}',      'updateUser')->name('update.user');  // save

    /* ---------- Delete user ---------- */
   Route::get('/delete-user/{id}', 'deleteUser')->name('delete.user');
});

/* Optional quick view route (no controller) */
Route::view('/newuser', 'adduser');    // don’t start view name with “/”
