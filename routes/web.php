<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portfolio');
})->name('portfolio');

Route::view('/projects', 'projects.index')->name('projects.index');
Route::view('/projects/citrapay', 'projects.index')->name('projects.citrapay');