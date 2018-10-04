<?php

namespace CMS\Http\Controllers;

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
        if ($request != null)
        {
            $name = $request->input('nameCategory');
            
            DB::table('categories')->insert(['name' => $name]);
        }

        return view('category.add');
    }

    public function all()
    {
        $allCategory = DB::table('categories')->get();

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
