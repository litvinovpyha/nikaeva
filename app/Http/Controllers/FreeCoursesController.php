<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreeCoursesController extends Controller
{
    public function manicure()
    {
        return view('courses.free.manicure');
    }
    public function hairstylist()
    {
        return view('courses.free.hairstylist');
    }
        public function simplestart()
    {
        return view('courses.free.simplestart');
    }
}
