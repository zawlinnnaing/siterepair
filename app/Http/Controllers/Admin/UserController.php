<?php

namespace App\Http\Controllers\Admin;

use App\General\FormRequestRules\UserFormRequestRules;
use App\Http\Requests\ChangePasswordRequest;
use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    use UserFormRequestRules;

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
        return view('admin.users.create');
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
        $this->validate($request, $this->storeRules());

        $user = User::create([
            'name'     => $request->input('name'),
            'email'    => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);

        if ($user) {
            $user->assignRole($request->input('role'));
            return redirect()->route('users.index')->with('msg', 'User created successfully');
        }
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
        $user = User::find($id);
        if ($user) {
            return view('admin.users.edit')->with(['user' => $user]);
        }
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
        $this->validate($request, $this->updateRules());
        $user = User::find($id);
        if ($user) {
            $user->update($request->all());
            return redirect()->route('users.edit', ['id' => $id])->with('msg', 'User updated successfully');
        }
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
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return back()->with('msg', 'User deleted successfully');
        }
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
