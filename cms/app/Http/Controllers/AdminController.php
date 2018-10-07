<?php

namespace CMS\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    public function index() {
        return view('admin.index');
    }
}
