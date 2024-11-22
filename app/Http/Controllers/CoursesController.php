<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index(){
        return view('landing.pages.courses');
    }
    public function anm(){
        return view('landing.pages.anm');
    }
    public function gnm(){
        return view('landing.pages.gnm');
    }
    public function pharmacy(){
        return view('landing.pages.pharmacy');
    }
    public function nurshing(){
        return view('landing.pages.nurshing');
    }
}
