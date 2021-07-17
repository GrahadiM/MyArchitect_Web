<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CategoryModelController extends Controller
{
    public function index()
    {
        $category = CategoryModel::orderBy('title', 'ASC')->paginate(5);
        return view('admin.categorymodel.index', compact('category'));
    }

    public function create()
    {
        return view('admin.categorymodel.create');
    }

    public function store(Request $request)
    {
        CategoryModel::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
        ]);
        return redirect('/category-model');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $item = CategoryModel::find($id);
        return view('admin.categorymodel.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:150',
        ]);

        $item = CategoryModel::find($id);
        $item->update([
            'title' => $request->title,
            'slug'  => Str::slug($request->title),
        ]);
        return redirect()->route('category-model.index');
    }

    public function destroy($id)
    {
        $item = CategoryModel::find($id);
        $item->delete();
        return redirect()->route('category-model.index');
    }
}
