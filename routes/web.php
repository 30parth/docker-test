<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/post', \App\Livewire\Post\Index::class);
Route::get('/post/create', \App\Livewire\Post\Form::class);
