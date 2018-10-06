<?php

namespace CMS\Http\Controllers;

use Validator;
use CMS\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function add()
    {

        return view('category.add');
    }

    public function create(Request $request)
    {
		Category::create([
			'name' => $request->nameCategory
		]);
        return redirect()->route('CatAdd');
    }

    public function all()
    {
        return view('category.all', [
            'categories' => Category::all()
        ]);
    }

    public function delete($id)
    {
        Category::findOrFail($id)
					->delete();
        return redirect('CatAll');
    }
}
