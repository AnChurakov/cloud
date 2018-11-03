<?php

namespace CMS\Http\Controllers;

use CMS\City;
use Validator;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    public function all() {
        return view('city.all', [
            'cities' => City::all()->sortByDesc('name')
        ]);
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    public function add() {
        return view('city.add');
    }
    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function edit($id) {
        return view('city.edit', [
            'city' => City::findOrFail($id)
        ]);
    }
    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return redirect('city/add')
                        ->withErrors($validator)
                        ->withInput();
        }

        City::create([
            'name' => $request->name
        ]);

        return redirect('cities');
    }
    /**
     * Undocumented function
     *
     * @param Request $request
     * @param [type] $id
     * @return void
     */
    public function update(Request $request, $id) {
        $city = City::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return redirect('city/add')
                        ->withErrors($validator)
                        ->withInput();
        }

        $city->name = $request->name;
        $city->save();

        return redirect('cities');
    }
    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function delete($id) {
        City::findOrFail($id)->delete();
        return redirect('cities');
    }
}
