<?php

namespace CMS\Http\Controllers;

use CMS\Coupon;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function add(){

        return view('coupon.add');

    }

    public function create(Request $request){

        Coupon::create([
            'name' => $request->couponName,
            'procent' => $request->procentCoupon,
            'date' => Carbon::now(),
            'status' => 'active'
        ]);

        return redirect()->route('CouponAdd');
    }

    public function all(){
        
        return view('coupon.all', [
            'coupons' => Coupon::all()
        ]);

    }

    public function delete($id){

        Coupon::findOrFail($id)->delete();

        return redirect()->route('CouponAll');
    }
}
