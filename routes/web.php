<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/articles', function () {
    return view('articles');
});
Route::get('/detail', function () {
    return view('detail');
});


Route::middleware('auth')->group(function () {
    Route::get('/posts', 'viewsController@index')->name('posts.index');
    Route::get('/posts/details/{id}', 'viewsController@details')->name('posts.details');
    Route::get('/posts/add', 'viewsController@add')->name('posts.add');
    Route::post('/posts/insert', 'postsController@insert')->name('posts.insert');
    Route::get('/posts/edit/{id}', 'viewsController@edit')->name('posts.edit');
    Route::post('/posts/update/{id}', 'postsController@update')->name('posts.update');
    Route::get('/posts/delete/{id}', 'postsController@delete')->name('posts.delete');
    Route::get('admin/dep/create','viewsController@createDep')->name('admin.createDep');
    Route::get('admin/add_degree',function(){
        return view('admin.add_degree');
    })->name('admin.add_degree');
    Route::post('/admin/insert_degree','HomeController@insertDeg')->name('admin.insert_deg');
    Route::get('/admin/edit_dep/{keyword}','HomeController@editDep')->name('admin.edit_dep');
    Route::post('/admin/update_dep/{keyword}','HomeController@updateDep')->name('admin.updateDep');
    Route::get('/admin/delete_deg/{id}','HomeController@deleteDeg');
    Route::get('/admin/delete_research/{id}','HomeController@deleteResearch');
    Route::get('/admin/add_research',function(){
        return view('admin.add_research');
    })->name('admin.add_research');
    Route::post('/admin/insert_research','HomeController@insertResearch')->name('admin.insert_research');
    Route::get('/admin/add_announcement',function (){
        return view('announcements.add');
    })->name('announcements.add');
    Route::post('/admin/insert_announcement','HomeController@insertAnnouncement')->name('announcements.insert');
    Route::get('/admin/announcements','HomeController@annIndex')->name('announcements.index');
    Route::get('/admin/announcements/edit/{id}','HomeController@editAnn')->name('announcements.edit');
    Route::post('/admin/announcements/update/{id}','HomeController@updateAnn')->name('announcements.update');
    Route::get('/admin/announcements/delete/{id}','HomeController@deleteAnn')->name('announcements.delete');
});

//api routes
Route::get('/postsapi', 'postsController@index');
Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/admin/dep/insert','HomeController@insertDep')->name('admin.insertDep');
app()->bind('postsPhotosController', App\Http\Controllers\postsPhotosController::class);
app()->bind('postsController', App\Http\Controllers\postsController::class);
