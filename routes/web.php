<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('todo-list(staging)');
});

// Route::get('todo', function () {
//     return view('todo-list');
// });

// Route::get('todo-staging', function () {
//     return view('todo-list(staging)');
// });
