<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\Role;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('name', 'ASC')->latest()->paginate(10);
        return view('admin.accsetting.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.accsetting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'role_id' => 2,
            'status_id' => 2,
            'gender_id' => $request->gender,
            'email' => $request->email,
            'phone' => $request->phone,
            'avatar' => "https://via.placeholder.com/110x110",
            'password' => Hash::make($request->password),
        ]);
        return redirect('/account-setting');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.accsetting.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, $id)
    {
        $user = User::find($id);
        $roles = Role::all();
        $statuss = Status::all();
        $genders = Gender::all();
        return view('admin.accsetting.edit', compact('user', 'roles', 'statuss', 'genders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'role_id' => 'required',
            'status_id' => 'required',
            'gender_id' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'avatar' => 'required',
        ]);

        $user = User::find($user->id);
        $user->update([
            'name' => $request->name,
            'role_id' => $request->role_id,
            'status_id' => $request->status_id,
            'gender_id' => $request->gender_id,
            'email' => $request->email,
            'phone' => $request->phone,
            'avatar' => "https://via.placeholder.com/110x110",
            // 'password' => Hash::make($request->password),
        ]);
        return redirect('/account-setting');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
