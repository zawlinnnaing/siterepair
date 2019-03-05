<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function logout()
    {
        if (auth()->user()) {
            auth()->logout();
            return redirect()->route('index');
        }
    }
}
