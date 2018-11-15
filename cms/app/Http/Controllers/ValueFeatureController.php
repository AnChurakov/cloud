<?php

namespace CMS\Http\Controllers;

use Gate;
use Validator;
use CMS\ValueFeature;
use CMS\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ValueFeatureController extends Controller
{
    public function all() {

        $valueFeature = ValueFeature::all()->sortByDesc('name');

        return view('valuefeature.all', [
            'valuefeatures' => $valueFeature
        ]);
    }


    public function add() {
        return view('valuefeature.add', [
            'features' => Feature::all()
        ]);
    }

    public function create(Request $request)
    {
      
        $value = new ValueFeature;

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return redirect('valuefeature/add')
                        ->withErrors($validator)
                        ->withInput();
        }

        $create = ValueFeature::create([
            'name' => $request->name,
        ]);

        $feature = Feature::findOrFail($request->featureId);

        $value->feature()->attach($feature, ['value_feature_id' => $create->id]);

        return redirect()->route('valuefeatureAdd')->with('success', 'true');
    }

    public function delete(Request $request, $id)
    {
        ValueFeature::findOrFail($id)
                    ->delete();
                    
        return redirect()->route('valuefeatureAll');
    }
}
