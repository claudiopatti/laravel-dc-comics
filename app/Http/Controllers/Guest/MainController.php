<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {

        return view('welcome');
        // return view('welcome', compact('firstName', 'lastName'));
    }

    public function about() {
        return view('subpages.about');
    }
}
