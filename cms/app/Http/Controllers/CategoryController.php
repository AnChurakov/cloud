<?php

namespace CMS\Http\Controllers;

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


        return redirect()->route('CatAdd');
    }

    public function all()
    {
        $allCategory = Category::all();

        return view('category.all', ['categories' => $allCategory]);
    }

    public function delete($id)
    {
        if ($id != null)
        {
            DB::table('categories')->where('id', '=', $id)->delete();
        }

        return redirect()->route('CatAll');
    }
}
