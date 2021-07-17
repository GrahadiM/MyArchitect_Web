<?php

namespace App\Http\Controllers;

use App\Models\Arsitek;
use App\Models\User;
use Illuminate\Http\Request;

class ArsitekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arsiteks = User::where('role_id', '2')->paginate(10);
        return view('admin.arsitek.index', compact('arsiteks'));
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
     * @param  \App\Models\Arsitek  $arsitek
     * @return \Illuminate\Http\Response
     */
    public function show(Arsitek $arsitek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Arsitek  $arsitek
     * @return \Illuminate\Http\Response
     */
    public function edit(Arsitek $arsitek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Arsitek  $arsitek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Arsitek $arsitek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Arsitek  $arsitek
     * @return \Illuminate\Http\Response
     */
    public function destroy(Arsitek $arsitek)
    {
        //
    }
}
