<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::livewire('/post', 'post.index');
Route::livewire('/post/create', 'post.form');
