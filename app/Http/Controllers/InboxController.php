<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class InboxController extends Controller
{
    public function index()
    {
        $customers = Order::all();
        return view('inbox.index', compact('customers'));
    }
}
