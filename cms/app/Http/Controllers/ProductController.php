<?php

namespace CMS\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function add(){

        $category = DB::table('categories')->get();

        $subcatgetory = DB::table('sub_categories')->get();

        return view('product.add', ['category' => $category, 'subcategory' => $subcatgetory]);
        
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
