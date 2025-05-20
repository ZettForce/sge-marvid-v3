<?php

use App\Livewire\Admin\Academia\Index;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

//Rutas academia
Route::get('/academia', Index::class)->name('admin.academia.index');
