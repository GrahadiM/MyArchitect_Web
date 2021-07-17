<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\CategoryType;
use App\Models\Order;
use App\Models\Portofolio;
use App\Models\Progres;
use App\Models\User;
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
        $users = User::where('role_id', '3')->get();
        $category_type = CategoryType::all();
        $category_model = CategoryModel::all();
        $portofolio = Portofolio::all();
        $orders = Order::all();
        return view('progres.create', compact('users', 'category_type', 'category_model', 'portofolio', 'orders'));
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
    public function update(Request $request, Progres $progres)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Progres  $progres
     * @return \Illuminate\Http\Response
     */
    public function destroy(Progres $progres)
    {
        //
    }
}
