<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:registrations',
            'father_name' => 'required',
            'mother_name' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'state' => 'required',
            'city' => 'required',
            'pincode' => 'required',
        ]);

        $data = $request->except('id_proof','marksheet','_token');

        $registration = new Registration();
        $registration = $registration->create($data);
        if($registration->id){
            if($request->hasFile('id_proof')) {
                $file = $request->file('id_proof');
                $file_data = $this->fileUpload($file, $registration);
                // $registration->ima


                // $registration->save();
            }
            if($request->hasFile('marksheet')) {
                $file = $request->file('marksheet');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move('upload/registration/', $filename);
                $registration->image = $filename;
                $registration->save();
            }
            return ok($registration,'Registration Has been successfully added');
        }
        return bad('Something went wrong');
    }

    /**
     * Display the specified resource.
     */
    public function show(Registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registration $registration)
    {
        //
    }
}
