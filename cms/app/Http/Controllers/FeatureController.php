<?php

namespace CMS\Http\Controllers;

use Gate;
use Validator;
use CMS\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeatureController extends Controller
{
    public function all() {
        return view('feature.all', [
            'features' => Feature::all()
        ]);
    }

    public function add(){
        return view('feature.add');
    }

    public function create(Request $request)
    {
      
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return redirect('feature/add')
                        ->withErrors($validator)
                        ->withInput();
        }

        Feature::create([
            'name' => $request->name,
            'description' => $request->desc
        ]);

        return redirect()->route('featureAdd')->with('success', 'true');
    }
}
