<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Laravel\Ui\Presets\React;

use function Ramsey\Uuid\v1;

class CategoryController extends Controller
{
    public function index()
    {
        $data_category = Category::paginate(5);
        return view('backend.category.index', compact('data_category'));
    }

    public function create()
    {
        return view('backend.category.create');
    }

    public function store(Request $request)
    {
        Category::create(
            [
                'category'=>$request->input('category'),
                'slug'=>Str::slug($request->input('category')),
            ]
        );

        return redirect()->route('category-index');
    }

    public function edit($id)
    {
        $data_category = Category::where('id', $id)->first();
        return view('backend.category.edit', compact('data_category'));
    }

    public function update(Request $request, $id)
    {
        $data_category = Category::where('id', $id)->first();
        $data_category->update(
            [
                'category'=>$request->input('category'),
                'slug'=>Str::slug($request->input('category')),
            ]
        );

        return redirect()->route('category-index');
    }

    public function delete($id)
    {
        $data_category = Category::where('id', $id)->first();
        $data_category->delete();
        return redirect()->route('category-index');
    }
}
