<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\Website\PagesController::class,'index'])->name('website.home');
Route::get('services',[App\Http\Controllers\Website\PagesController::class,'services'])->name('website.services');