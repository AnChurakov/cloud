<?php

namespace CMS\Http\Controllers;

use Gate;
use Validator;
use CMS\Product;
use CMS\Category;
use CMS\SubCategory;
use CMS\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function all() {

        if (Auth::user()->cant('administrate', User::class)) {
            abort(403, 'Вы не администратор!');
        }

        $Categories = Category::all()->sortByDesc('name');
        $Subcategory = SubCategory::all()->sortByDesc('name');
        $products = Product::all()->sortByDesc('created_at');

        return view('product.all', [
            'category' => $Categories, 
            'subcategory' => $Subcategory,
            'products' => $products
        ]);
    }
    
    /**
     * Форма добавления товара
     *
     * @return void
     */
    public function add() {

        if (Auth::user()->cant('administrate', User::class)) {
            abort(403, 'Вы не администратор!');
        }

        $Categories = Category::all()->sortByDesc('name');
        $Subcategory = SubCategory::all()->sortByDesc('name');

        return view('product.add', [
            'category' => $Categories, 
            'subcategory' => $Subcategory
        ]);
    }
    /**
     * Добавление товара в БД
     *
     * @param Request $request
     * @return void
     */
    public function create(Request $request)
    {
        if (Auth::user()->cant('administrate', User::class)) {
            abort(403, 'Вы не администратор!');
        }
        $validator = Validator::make($request->all(), [
            'ProductName' => 'required|max:255',
            'Description' => 'required',
            'Price' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('product/add')
                        ->withErrors($validator)
                        ->withInput();
        }

        Product::create([
            'name' => $request->ProductName,
            'description' => $request->Description,
            'price' => $request->Price,
            'category_id' => $request->category,
            'subcategory_id' => $request->subcategory,
            'vendorcode' => $request->vendorcode
        ]);

        return redirect()->route('productAdd')->with('success', 'true');
    }
    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function delete($id) {
        if (Auth::user()->cant('administrate', User::class)) {
            abort(403, 'Вы не администратор!');
        }
        Product::findOrFail($id)->delete();
        return redirect()->route('productAll');
    }

    public function single($id){
        return view('product.single', [
            'product' => Product::findOrFail($id)
        ]);
    }
}
