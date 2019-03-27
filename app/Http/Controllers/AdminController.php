<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        $user = Auth::user();
        if ($user) {
            $user->api_token = null;
            $user->save();
            Auth::logout();
            return redirect()->route('index');
        }
    }
}
