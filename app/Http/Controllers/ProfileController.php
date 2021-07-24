<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();
        $genders = Gender::all();
    	return view('profile.index', compact('user', 'genders'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $this->validate($request, [
            "name" => "required|string",
            "email" => "required|email|unique:users,id," . $id,
            "password" => "required",
            "gender" => "required",
            "phone" => "required|numeric",
            "city" => "required|string",
            "address" => "required|string",
            "desc" => "required",
        ]);

    	$user = User::where('id', Auth::user()->id)->first();

        if ($request->hasFile("url_avatar")) {
            $file = $request->file("url_avatar");
            $filename = time() . "." . $file->getClientOriginalExtension();

            $file->move('image/profile', $filename);

            // File::delete('assets/image/profile' . $user->image);

            // Jika user mengganti passwornya password 

            if ($user->password != $request->password) {
                $user->update([
                    "name" => $request->name,
                    "email" => $request->email,
                    "password" => Hash::make($request->password),
                    "url_avatar" => $filename,
                    "gender_id" => $request->gender,
                    "phone" => $request->phone,
                    "city" => $request->city,
                    "address" => $request->address,
                    "desc" => $request->desc,
                ]);
            } else {
                // Jika user tidak mengganti passwordnya
                $user->update([
                    "name" => $request->name,
                    "email" => $request->email,
                    "password" => $request->password,
                    "url_avatar" => $filename,
                    "gender_id" => $request->gender,
                    "phone" => $request->phone,
                    "city" => $request->city,
                    "address" => $request->address,
                    "desc" => $request->desc,
                ]);
            }
        } else {
            //jika user tidak mengubah foto
            $user->update([
                "name" => $request->name,
                "email" => $request->email,
                "password" => $request->password,
                "gender" => $request->gender,
                "phone" => $request->phone,
                "city" => $request->city,
                "address" => $request->address,
                "desc" => $request->desc,
            ]);
        }
    	
    	return redirect('profile');
    }
}
