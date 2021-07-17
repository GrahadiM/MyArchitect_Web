<?php

namespace App\Http\Controllers;

use App\Models\CategoryType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CategoryTypeController extends Controller
{
    public function index()
    {
        $category = CategoryType::orderBy('title', 'ASC')->paginate(5);
        return view('admin.categorytype.index', compact('category'));
    }

    public function create()
    {
        return view('admin.categorytype.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        CategoryType::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
        ]);
        return redirect('/category-type');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $item1 = CategoryType::findOrFail($id);
        return view('admin.categorytype.edit', compact('item1'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:150',
        ]);

        $item1 = CategoryType::find($id);
        $item1->update([
            'title' => $request->title,
            'slug'  => Str::slug($request->title),
        ]);
        return redirect()->route('category-type.index');
    }

    public function destroy($id)
    {
        $item1 = CategoryType::find($id);
        $item1->delete();
        return redirect('/category-type');
    }
}
