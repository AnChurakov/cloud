<?php

namespace CMS\Http\Controllers;

use Gate;
use Validator;
use CMS\Coupon;
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
        return view('coupon.add');
    }
    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function create(Request $request){

        if (Gate::allow('administrate', Auth::user())) {
            abort(403, 'У вас нет прав на редактирование данного материала');
        }
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'procent' => 'required',
            'date' => 'required|date',
            'status' => 'required',
        ]);
        if ($category->fails()) {
            return redirect('coupon/add')
                        ->withErrors($validator)
                        ->withInput();
        }
        Coupon::create([
            'name' => $request->couponName,
            'procent' => $request->procentCoupon,
            'date' => Carbon::now(),
            'status' => 'active'
        ]);

        return redirect()->route('CouponAll')->with('success', 'true');
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
