<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\postsController;
use App\Http\Controllers\postsPhotoController;
use App\Department;

class viewsController extends Controller
{
    protected $dataControllerPosts, $dataControllerPhotos;

    public function __construct()
    {
        // app()->bind('postsPhotosController',postsPhotosController::class);
        // app()->bind('postsController',postsController::class);

        $this->dataControllerPosts = app()->make('PostsController');
    }

    public function index()
    {
        $posts = Post::latest()->paginate(20);
        return view('posts.index', ['posts' => $posts]);
    }

    public function details($id)
    {
//        $controller = new postsController;
        $data = $this->dataControllerPosts->details($id);
        $post = $data->getData()->post;
        return view('posts.details', ['post' => $post]);
    }

    public function add()
    {
        return view('posts.add');
    }

    public function edit($id)
    {
//        $controller = new postsController;
        $post = $this->dataControllerPosts->edit($id)->getData()->post;
        return view('posts.edit', ['post' => $post]);
    }

    public function createDep()
    {
        $departments = Department::all();
        return view('admin.createDep')->with(['departments' => $departments]);
    }

    public function dep()
    {

        return view('departments.civil');
    }


}
