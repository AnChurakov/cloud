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
     * Undocumented function
     *
     * @return void
     */
    public function add(){
        return view('coupon.add', [
            'categories' => Category::all(),
            'subcategories' => SubCategory::all()
        ]);
    }
    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function create(Request $request){

        
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'procent' => 'required',
            'date' => 'required|date',
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

        return redirect()->route('CouponAdd')->with('success', 'true');
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    public function all(){
        
        return view('coupon.all', [
            'coupons' => Coupon::all()
        ]);

    }
    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function delete($id){

        if (Gate::allow('administrate', Auth::user())) {
            abort(403, 'У вас нет прав на редактирование данного материала');
        }
        Coupon::findOrFail($id)->delete();

        return redirect()->route('CouponAll');
    }
}
