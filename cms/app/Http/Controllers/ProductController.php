<?php

namespace CMS\Http\Controllers;

use CMS\Category;
use CMS\SubCategory;
use CMS\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function add(){

        $Categories = Category::all()->sortByDesc('name');

        $Subcategory = Subcategory::all()->sortByDesc('name');

        return view('product.add', ['category' => $Categories, 'subcategory' => $Subcategory]);
        
    }

    public function create(Request $request)
    {
        if ($request != null)
        {
            $nameProduct = $request->input('nameProduct');

            $desc = $request->input('desc');

            $category = $request->input('category');

            $subcategory = $request->input('subcategory');

            $price = $request->input('price');

            DB::table('products')->insert([
                'name' => $nameProduct,
                'desc' => $desc,
                'price' => $price,
                'category_id' => $category,
                'subcategory_id' => $subcategory
            ]);
        }

        return redirect()->route('productAdd');
    }
}
