<?php

namespace CMS\Http\Controllers;

use Validator;
use CMS\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function add()
    {
        return view('category.add');
    }
    /**
     * Undocumented function
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
            'name' => 'required|max:255'
        ]);
        if ($category->fails()) {
            return redirect('product/add')
                        ->withErrors($validator)
                        ->withInput();
        }
		Category::create([
			'name' => $request->CategoryName
        ]);
        
        return redirect()->route('CatAll');
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    public function all()
    {
        return view('category.all', [
            'categories' => Category::all()
        ]);
    }
    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function delete($id)
    {
        if (Gate::allow('administrate', Auth::user())) {
            abort(403, 'У вас нет прав на редактирование данного материала');
        }
        Category::findOrFail($id)
					->delete();
        return redirect('CatAll');
    }
}
