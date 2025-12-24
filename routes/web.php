<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\Website\PagesController::class,'index'])->name('website.home');
Route::get('services',[App\Http\Controllers\Website\PagesController::class,'services'])->name('website.services');
Route::get('how-it-works',[App\Http\Controllers\Website\PagesController::class,'how_it_works'])->name('website.how-it-works');