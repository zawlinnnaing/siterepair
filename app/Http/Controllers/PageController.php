<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class PageController extends Controller
{
    //
    public function departments ($id){
    	$dep = Department::find($id);
    	return view('departments',['dep' => $dep]);
    }
}
