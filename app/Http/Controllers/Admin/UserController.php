<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\UserDataTable;
use App\Http\Controllers\Controller;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(UserDataTable $dataTable)
    {
        $states = State::all();
        if(request()->ajax()){
            return $dataTable->render('admin.pages.users.list',compact('states'));
        }

        return $dataTable->render('admin.pages.users.list',compact('states'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $states = State::all();
        return view('admin.pages.users.add',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required',

        ]);

        $data = $request->all();
        $data['user_type'] = 'admin';
        $data['password'] = bcrypt($data['mobile']);
        $data['is_active'] = $request->is_active == '1' ? 1 : 0;
        $user = new User();
        $user = $user->create($data);

        return redirect()->route('users.index')->with('success','User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

    }

    public function changeStatus($id)
    {
        //
    }

    public function profile($userId)
    {
        $user = User::find($userId);
        return view('admin.pages.users.profile',compact('user'));
    }

    public function changePassword($userId)
    {
        $user = User::find($userId);;
        return view('admin.pages.users.security',compact('user'));
    }

    public function updatePassword(Request $request, $userId)
    {
        $user = User::find($userId);;
    }

    public function notifications($userId)
    {
        $user = User::find($userId);;
        return view('admin.pages.users.notifications',compact('user'));
    }

}
