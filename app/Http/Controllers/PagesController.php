<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PagesController extends Controller
{
    public function index() {
        return view('pages.home');
    }

    public function practice() {
        return view('pages.practicepage');
    }
}
