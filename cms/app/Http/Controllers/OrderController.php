<?php

namespace CMS\Http\Controllers;

use Validator;
use Gate;
use CMS\Order;
use CMS\ProductOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function all()
    {
        $orders = Order::all()->sortByDesc('created_at');
        return view('order.all', 
        [
            'orders' => $orders
        ]);
    }

    public function single(Request $request, $id)
    {
        $order = Order::findOrfail($id);

        return view('order.single', [
            'order' => $order
        ]);
    }

    public function delete(Request $request, $id) {
        
        Order::findOrFail($id)->delete();
        
        return redirect()->route('orderAll');
    }

}
