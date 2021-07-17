<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\CategoryType;
use App\Models\Order;
use App\Models\Portofolio;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::paginate(10);
        return view('admin.order.index', compact('orders'));
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
        return view('admin.order.create', compact('users', 'category_type', 'category_model', 'portofolio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'portofolio_id' => 'required',
            'category_type_id' => 'required',
            'category_model_id' => 'required',
            'wa' => 'required',
            'area' => 'required',
            'harga' => 'required',
            'address' => 'required',
        ]);

        
        Order::create([
            'user_id' => $request->user_id,
            'portofolio_id' => $request->portofolio_id,
            'category_type_id' => $request->category_type_id,
            'category_model_id' => $request->category_model_id,
            'wa' => $request->wa,
            'area' => $request->area,
            'harga' => $request->harga,
            'address' => $request->address,
        ]);
        return redirect('/order');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        $order = Order::find($order->id);
        return view('admin.order.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order = Order::find($order->id);
        $order->delete();
        return redirect()->route('order.index');
    }
}
