<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index(){
        return view('landing.pages.courses');
    }
    public function anm(){
        return view('landing.pages.courses.anm');
    }
    public function gnm(){
        return view('landing.pages.courses.gnm');
    }
    public function d_pharmacy(){
        return view('landing.pages.courses.d-pharmacy');
    }
    public function b_pharmacy(){
        return view('landing.pages.courses.b-pharmacy');
    }
    public function nurshing(){
        return view('landing.pages.courses.nurshing');
    }
}
