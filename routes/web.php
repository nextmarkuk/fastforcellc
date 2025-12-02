<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\Website\PagesController::class,'index'])->name('website.home');
