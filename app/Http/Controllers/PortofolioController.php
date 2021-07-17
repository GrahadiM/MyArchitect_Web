<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\CategoryType;
use App\Models\Portofolio;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PortofolioController extends Controller
{
    public function index()
    {
        if (auth()->user()->role_id == 1) {
            $portofolios = Portofolio::paginate(10);
            return view('admin.portofolio.index', compact('portofolios'));
        } else {
            $portofolios = Portofolio::with('user')->get();
            // $portofolio = Auth::user()->get('portofolio');
            return view('admin.portofolio.index', compact('portofolios'));
        }

    }

    public function create()
    {
        if (auth()->user()->role_id == 1) {
            $users = User::where('role_id', '2')->get();
            $category_types = CategoryType::all();
            $category_models = CategoryModel::all();
            return view('admin.portofolio.create', compact('users', 'category_types', 'category_models'));
        } else {
            $users = User::where('role_id', '2')->get();
            $category_types = CategoryType::all();
            $category_models = CategoryModel::all();
            return view('admin.portofolio.create', compact('users', 'category_types', 'category_models'));
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'project' => 'required',
            'category_type_id' => 'required',
            'category_model_id' => 'required',
            'luasbangunan' => 'required',
            // 'url_image' => 'required',
            'harga' => 'required',
        ]);

        
        Portofolio::create([
            'user_id' => $request->user_id,
            'project' => $request->project,
            'category_type_id' => $request->category_type_id,
            'category_model_id' => $request->category_model_id,
            'luasbangunan' => $request->luasbangunan,
            'harga' => $request->harga,
            'url_image' => $request->url_image,
            'url_video' => $request->url_video,
            'desc' => $request->desc,
            // if ($request->hasFile('url_image')) {
            //     $file = request('image');
            //     $dbpath = rand().'.'.$file->getClientOriginalExtension();
            //     $file->move(public_path('url_image'),$dbpath);
            //     $portofolio->url_image = $dbpath;
            // }
        ]);
        return redirect('/portofolio');
    }

    public function show(Portofolio $portofolio)
    {
        $portofolio = Portofolio::find($portofolio->id);
        return view('admin.portofolio.detail', compact('portofolio'));
    }

    public function edit($id)
    {
        $portofolio = Portofolio::find($id);
        $users = User::where('role_id', '2')->get();
        $category_types = CategoryType::all();
        $category_models = CategoryModel::all();

        return view('admin.portofolio.edit', compact('portofolio', 'users', 'category_types', 'category_models'));
    }

    public function update(Request $request, Portofolio $portofolio)
    {
        $request->validate([
            'user_id' => 'required',
            'project' => 'required',
            'category_type_id' => 'required',
            'category_model_id' => 'required',
            'luasbangunan' => 'required',
            // 'url_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harga' => 'required',
        ]);
        
        $portofolio = Portofolio::find($portofolio->id);
        $portofolio->update([
            'user_id' => $request->user_id,
            'project' => $request->project,
            'category_type_id' => $request->category_type_id,
            'category_model_id' => $request->category_model_id,
            'luasbangunan' => $request->luasbangunan,
            'harga' => $request->harga,
            'url_image' => $request->url_image,
            'url_video' => $request->url_video,
            'desc' => $request->desc,
        ]);
        return redirect()->route('portofolio.index');
    }

    public function destroy(Portofolio $portofolio)
    {
        $portofolio = Portofolio::find($portofolio->id);
        $portofolio->delete();
        return redirect()->route('portofolio.index');
    }
}
