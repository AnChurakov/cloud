<?php

namespace CMS\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function add(){
        
        return view('role.add');
    }

    public function create(Request $request){

        if ($request != null)
        {
            $nameRole = $request->input('nameRole');

            DB::table('roles')->insert(['name' => $nameRole]);
        }
        
        return redirect()->route('RoleAdd');
    }
}
