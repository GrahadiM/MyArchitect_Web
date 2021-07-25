<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Progres;
use Illuminate\Http\Request;

class ProgresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $progress = Progres::paginate(10);
        return view('progres.index', compact('progress'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('role_id', '2')->get();
        $orders = Order::all();
        return view('progres.create', compact('users', 'orders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            "user_id" => "required",
            "order_id" => "required",
            "name" => "required",
            // "image" => "required|mimes:png,jpg,jpeg",
            "note" => "required",
        ]);

        // if ($request->hasFile("image")) {
        //     $file = $request->file("image");
        //     $filename = time() . "." . $file->getClientOriginalExtension();

        //     $file->move('image/progres', $filename);
        //     Progres::create([
        //         "user_id" => $request->user_id,
        //         "order_id" => $request->order_id,
        //         "name" => $request->name,
        //         "image" => $filename,
        //         "note" => $request->note,
        //     ]);
        // }
        Progres::create([
            "user_id" => $request->user_id,
            "order_id" => $request->order_id,
            "name" => $request->name,
            "image" => $request->image,
            "note" => $request->note,
        ]);
        return redirect()->route('progres.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Progres  $progres
     * @return \Illuminate\Http\Response
     */
    public function show(Progres $progres)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Progres  $progres
     * @return \Illuminate\Http\Response
     */
    public function edit(Progres $progres)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Progres  $progres
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Progres $progres, $id)
    {
        $this->validate($request, [
            "user_id" => "required",
            "order_id" => "required",
            "image" => "required|mimes:png,jpg,jpeg",
            "name" => "required|string",
            "note" => "required|string",
        ]);

    	$progres = Progres::find($id);

        if ($request->hasFile("image")) {
            $file = $request->file("image");
            $filename = time() . "." . $file->getClientOriginalExtension();

            $file->move('image/progres', $filename);
            // File::delete('assets/image/profile' . $progres->image);
            $progres->update([
                "user_id" => $request->user_id,
                "order_id" => $request->order_id,
                "name" => $request->name,
                "image" => $filename,
                "note" => $request->note,
            ]);
        } else {
            //jika prog$progres tidak mengubah foto
            $progres->update([
                "user_id" => $request->user_id,
                "order_id" => $request->order_id,
                "name" => $request->name,
                "note" => $request->note,
            ]);
        }
    	
    	return redirect('profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Progres  $progres
     * @return \Illuminate\Http\Response
     */
    public function destroy(Progres $progres, $id)
    {
        $progres = Progres::find($id);
        $progres->delete();
        return redirect()->back();
    }
}
