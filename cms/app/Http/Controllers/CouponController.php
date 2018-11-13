<?php

namespace CMS\Http\Controllers;

use Gate;
use Validator;
use CMS\Coupon;
use CMS\Category;
use CMS\SubCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CouponController extends Controller
{
    /**
     * Форма добавления промокода 
     *
     * @return void
     */
    public function add() {
        return view('coupon.add', [
            'categories' => Category::all(),
            'subcategories' => SubCategory::all()
        ]);
    }
    /**
     * Добавление данных промокода в БД
     *
     * @param Request $request
     * @return void
     */
    public function create(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'procent' => 'required',
            'status' => 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect('coupon/add')
                        ->withErrors($validator)
                        ->withInput();
        }

        Coupon::create([
            'name' => $request->name,
            'procent' => $request->procent,
            'date' => Carbon::now(),
            'status' => $request->status,
            'category_id' => $request->catId,
            'subcategory_id' => $request->subcatId
        ]);

        return redirect()
                    ->route('coupon.add')
                    ->with('success', 'true');
    }
    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function edit($id) {
        return view('coupon.edit', [
            'coupon' => Coupon::findOrFail($id),
            'categories' => Category::all()->sortByDesc('name'),
            'subcategories' => SubCategory::all()->sortByDesc('name')
        ]);
    }
    /**
     * Undocumented function
     *
     * @param Request $request
     * @param [type] $id
     * @return void
     */
    public function update(Request $request, $id) {
        $coupon = Coupon::failOrFail($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'procent' => 'required',
            'status' => 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect('coupon/add')
                        ->withErrors($validator)
                        ->withInput();
        }

        $coupon->name = $request->name;
        $coupon->procent = $request->procent;
        $coupon->date = Carbon::now();
        $coupon->status = $request->status;
        $coupon->category_id = $request->catId;
        $coupon->subcategory_id = $request->subcatId;

        $coupon->save();

        return redirect()
                    ->route('coupons')
                    ->with('success', 'true');
    }
    /**
     * Список всех промокодов
     *
     * @return void
     */
    public function all() {
        return view('coupon.all', [
            'coupons' => Coupon::all()
        ]);
    }
    /**
     * Удаление данных промокода из БД
     *
     * @param int $id
     * @return void
     */
    public function delete($id) {
        Coupon::findOrFail($id)->delete();
        return redirect()
                    ->route('coupons');
    }
}
