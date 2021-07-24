<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = User::where('role_id', '3')->latest()->paginate(10);
        return view('admin.client.index', compact('clients'));
    }
}
