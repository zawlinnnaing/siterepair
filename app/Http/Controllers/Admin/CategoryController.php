<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::paginate(15);
        return view('admin.categories.index')->with(['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.categories.create');
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
        $this->validate($request, $this->formRules());
        $data = $request->all();
        $data['title'] = ucwords($data['title']);
        $category = Category::create($data);
        if ($category) {
            Session::flash('msg', 'Category created successfully');
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $category = Category::find($id);
        return view('admin.categories.edit')->with(['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, $this->formRules());
        $category = Category::find($id);
        $data = $request->all();
        if ($category) {
            $category->update($data);
            Session::flash('msg', 'Category updated successfully');
            return redirect(route('categories.index'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        //
        $category = Category::find($id);
        if ($category && $category->posts()->get()->count() <= 0) {
            $category->delete();
            Session::flash('msg', 'Category deleted successfully');
            return back();
        } else {
            return back()
                ->with('error_msg', 'Sorry , you cannot delete category that has posts ');
        }
    }

    public function formRules()
    {
        return ['title' => 'required|string'];
    }
}
