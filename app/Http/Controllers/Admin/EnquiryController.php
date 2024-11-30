<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\EnquiryDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{

    public function index(EnquiryDataTable $dataTable)
    {
        if(request()->ajax()){
            return $dataTable->render('admin.pages.enquiry.list');
        }

        return $dataTable->render('admin.pages.enquiry.list');
    }


}
