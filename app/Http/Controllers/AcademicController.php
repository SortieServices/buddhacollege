<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;

class AcademicController extends Controller
{
    public function academic_undergraduate()
    {
        return view('landing.pages.academic-undergraduate');
    }
    public function academic_graduate()
    {
        return view('landing.pages.academic-graduate');
    }

    public function admission()
    {
        $states = State::all();
        return view('landing.pages.admission', compact('states'));
    }
}
