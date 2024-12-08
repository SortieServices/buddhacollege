<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcademicController extends Controller
{
    public function academic()
    {
        return view('landing.pages.academic');
    }

    public function admission()
    {
        return view('landing.pages.academic');
    }
}
