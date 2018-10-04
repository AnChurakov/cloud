<?php

namespace CMS\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{
    public function add()
    {
        $category = DB::table('categories')->get();

        return view('subcategory.add', ['categories' => $category]);
    }

    public function create(Request $request)
    {
        $name = $request->input('nameSubcategory');

        $category = $request->input('category');

        if ($name != null && $category != null)
        {
            DB::table('sub_categories')
            ->insert(['name' => $name, 
            'category_id' => $category,
            'desc' => ''
            ]);
        }

        return redirect()->route('SubcatAdd');
    }

    public function all()
    {
        $allSubcategory = DB::table('sub_categories')->get();

        return view('subcategory.all', ['subcategories' => $allSubcategory]);
    }

    public function delete($id)
    {
        DB::table('sub_categories')->where('id','=', $id)->delete();

        return redirect()->route('SubcatAll');
    }
}
