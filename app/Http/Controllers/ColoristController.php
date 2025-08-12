<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ColoristController extends Controller
{
    public function index(): View{
        return view('colorist.index');
    }
}
