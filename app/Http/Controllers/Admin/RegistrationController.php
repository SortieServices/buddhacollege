<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\RegistrationDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(RegistrationDataTable $dataTable)
    {
        if(request()->ajax()){
            return $dataTable->render('admin.pages.registration.list');
        }

        return $dataTable->render('admin.pages.registration.list');
    }
}
