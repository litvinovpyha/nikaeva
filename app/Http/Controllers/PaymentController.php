<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PaymentController extends Controller
{
        public function index():View{
        $title = 'Академия красоты NikaEva';
        return view('payment',compact('title'));
    }
}
