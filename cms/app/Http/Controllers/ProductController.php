<?php

namespace CMS\Http\Controllers;

use Validator;
use CMS\Product;
use CMS\Category;
use CMS\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Форма добавления товара
     *
     * @return void
     */
    public function add() {

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
        if (Gate::allow('administrate', Auth::user())) {
            abort(403, 'У вас нет прав на редактирование данного материала');
        }
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'desc' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'subcategory_id' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('product/add')
                        ->withErrors($validator)
                        ->withInput();
        }

        Product::create([
            'name' => $request->ProductName,
            'desc' => $request->desc,
            'price' => $request->price,
            'category_id' => $request->category,
            'subcategory_id' => $request->subCategory
        ]);

        return redirect()->route('productAdd');
    }
    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function delete($id) {
        if (Gate::allow('administrate', Auth::user())) {
            abort(403, 'У вас нет прав на редактирование данного материала');
        }
        Product::findOrFail($id)->delete();
        return redirect()->route('productAdd');
    }

    public function single($id){
        
        return view('product.single', ['product' => Product::findOrFail($id)]);
        
    }
}
