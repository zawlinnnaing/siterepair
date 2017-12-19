<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class PageController extends Controller
{
    //
    public function dep($keyword){
    	$dep = Department::where('name',$keyword)->with(['research','degrees','staff','courses'])->first();
    	return view('departments.department',['dep' => $dep]);
    }
}
