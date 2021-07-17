<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Review;
use App\Models\Role as ModelsRole;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->status_id == 1){
            if (auth()->user()->role_id == 1){
                $arsitek = User::where('role_id', '2')->get();
                $client = User::where('role_id', '3')->get();
                $users = User::where('role_id', '2')->orderBy('name', 'ASC')->paginate(10);
                $order = Order::all();
                $review = Review::all();
                return view('admin.home', compact('arsitek', 'client', 'users', 'order', 'review'));
            } elseif (auth()->user()->role_id == 2) { 
                $arsitek = User::where('role_id', '2')->get();
                $client = User::where('role_id', '3')->get();
                $order = Order::all();
                $review = Review::all();
                return view('admin.dashboard', compact('arsitek', 'client', 'order', 'review'));
            }else {
                return view('home');
            }
        }elseif (auth()->user()->status_id == 2){
            return redirect('/403');
        }else{
            return redirect('/403');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, $id)
    {
        $user = User::findOrFail($id);
        $roles = ModelsRole::all();
        $statuss = Status::all();
        return view('admin.home-edit', compact('user', 'roles', 'statuss'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, $id)
    {
        $request->validate([
            'name' => 'required|max:150',
            'role_id' => 'required',
            'status_id' => 'required',
        ]);

        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'role_id' => $request->role_id,
            'status_id' => $request->status_id,
        ]);
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/home');
    }
}
