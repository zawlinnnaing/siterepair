<?php

namespace App\Http\Controllers\Admin;

use App\General\FormRulesCollections;
use App\Http\Requests\ChangePasswordRequest;
use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    use FormRulesCollections;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::paginate(20);
        return view('admin.users.index')->with(['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /************************** Other functions ************************
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getChangePassword()
    {
        return view('admin.users.change_password');
    }

    public function updatePassword(ChangePasswordRequest $request)
    {
        $user = User::find(Auth::user()->id);
        $user->password = bcrypt($request->input('new_password'));
        $user->remember_token = str_random(60);
        $user->save();
        return redirect()->route('users.index')->with('msg', 'Password changed successfully');
    }
}
