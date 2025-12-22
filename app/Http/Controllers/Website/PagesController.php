<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('website.index');
    }
    public function services() {
        return view('website.services');
    }
}
