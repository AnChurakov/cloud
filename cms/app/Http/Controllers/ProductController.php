<?php

namespace CMS\Http\Controllers;

use CMS\Product;
use CMS\Category;
use CMS\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function add() {

        $Categories = Category::all()->sortByDesc('name');
        $Subcategory = SubCategory::all()->sortByDesc('name');

        return view('product.add', [
            'category' => $Categories, 
            'subcategory' => $Subcategory
        ]);
    }

    public function create(Request $request)
    {
        if ($request != null) {
            Product::create([
                'name' => $request->ProductName,
                'desc' => $request->desc,
                'price' => $request->price,
                'category_id' => $request->category,
                'subcategory_id' => $request->subCategory
            ]);
        }

        return redirect()->route('productAdd');
    }
}
