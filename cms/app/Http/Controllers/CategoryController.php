<?php

namespace CMS\Http\Controllers;

use Validator;
use CMS\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Форма создания категории
     *
     * @return void
     */
    public function add()
    {
        return view('category.add');
    }
    /**
     * Добавление в БД данных категории
     *
     * @param Request $request
     * @return void
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255'
        ]);
        if ($validator->fails()) {
            return redirect('category/add')
                        ->withErrors($validator)
                        ->withInput();
        }
		Category::create([
            'name' => $request->name,
            'description' => $request->desc
        ]);
        
        return redirect()->route('CatAll');
    }
    /**
     * Форма редактирования категории
     *
     * @param int $id
     * @return void
     */
    public function edit($id) {
        return view('category.edit', [
            'category' => Category::findOrFail($id)
        ]);
    }
    /**
     * Обновление данных категории в БД
     *
     * @param Request $request
     * @param int $id
     * @return void
     */
    public function update(Request $request, $id) {
        $category = Category::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255'
        ]);
        if ($validator->fails()) {
            return redirect('category/' . $category->id . '/edit')
                        ->withErrors($validator)
                        ->withInput();
        }
        $category->name = $request->name;
        $category->desc = $request->desc;
        $category->save();
        return redirect('CatAll');
    }
    /**
     * Страница со всеми категориями
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
     * Удаление данных категории из БД
     *
     * @param int $id
     * @return void
     */
    public function delete($id)
    {
        Category::findOrFail($id)
					->delete();
        return redirect('CatAll');
    }
}
