<?php

namespace CMS\Http\Controllers;

use Illuminate\Http\Request;
use CMS\User;

class UserController extends Controller
{
    public function all()
    {
        return view('user.all', [
            'users' => User::all()
        ]);
    }
}
