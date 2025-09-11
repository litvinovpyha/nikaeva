<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HairstylistController extends Controller
{
    public function index(): View{
        return view('hairstylist.hairstylist');
    }
    public function hairstylistup(): View{
        return view('hairstylist.hairstylistup');
    }
    public function woomanstylist(): View{
        return view('hairstylist.woomanstylist');
    }
    public function coloristika(): View{
        return view('hairstylist.coloristika');
    }
    public function womanhairstylist(): View{
        return view('hairstylist.womanhairstylist');
    }
}
