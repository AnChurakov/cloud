<?php

namespace CMS\Http\Controllers;

<<<<<<< HEAD
use Validator;
=======
>>>>>>> dev
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
<<<<<<< HEAD
		$validator = new Validator::make($request->all(), [
            'description' => 'required|max:2000',
            'user_id' => 'required'
        ]);
		if ($validator->fails()) {
            return redirect('course/create')
                        ->withErrors($validator)
                        ->withInput();
        }
		
		Category::create([
			'name' => $request->nameCategory
		]);
=======
>>>>>>> dev


        return redirect()->route('CatAdd');
    }

    public function all()
    {
<<<<<<< HEAD
        return view('category.all', ['categories' => Category::all()]);
=======
        $allCategory = Category::all();

        return view('category.all', ['categories' => $allCategory]);
>>>>>>> dev
    }

    public function delete($id)
    {
        Category::findOrFail($id)
					->delete();
		
        return redirect('CatAll');
    }
}
