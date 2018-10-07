<?php

namespace CMS\Http\Controllers;

use CMS\Category;
use CMS\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{
    public function add()
    {
        return view('subcategory.add', [
            'categories' => Category::all()->sortByDesc('name')
        ]);
    }
    
    public function create(Request $request)
    {
        SubCategory::create([
            'name' => $request->SubcategoryName, 
            'category_id' => $request->CategoryId,
            'desc' => ''
        ]);

        return redirect()->route('SubcatAdd');
    }

    public function all()
    {
        return view('subcategory.all', [
            'subcategories' => SubCategory::all()->sortByDesc('name')
        ]);
    }

    public function delete($id)
    {
        SubCategory::findOrFail($id)->delete();

        return redirect()->route('SubcatAll');
    }
}
