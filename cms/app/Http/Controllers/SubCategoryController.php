<?php

namespace CMS\Http\Controllers;

use Validator;
use CMS\Category;
use CMS\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function add()
    {
        return view('subcategory.add', [
            'categories' => Category::all()->sortByDesc('name')
        ]);
    }
    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'CategoryId' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('subcategory/add')
                        ->withErrors($validator)
                        ->withInput();
        }

        SubCategory::create([
            'name' => $request->name, 
            'category_id' => $request->CategoryId,
            'description' => $request->desc
        ]);

        return redirect()->route('SubcatAll');
    }

    public function edit(Request $request, $id)
    {
        return view('subcategory.edit', [
            'category' => Category::all(),
            'subcategory' => SubCategory::findOrfail($id)
        ]);
    }
    /**
     * Обновление данных подкатегории в БД
     *
     * @param Request $request
     * @param int $id
     * @return void
     */
    public function update(Request $request, $id) {

        $subcategory = SubCategory::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return redirect('subcategory/edit/'. $category->id)
                        ->withErrors($validator)
                        ->withInput();
        }

        $subcategory->name = $request->name;
        $subcategory->description = $request->desc;
        $subcategory->category_id = $request->categoryId;
        $subcategory->save();

        return redirect('subcategory/edit/'.$subcategory->id)->with('success', 'true');
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
