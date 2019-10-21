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

// Route::get('/', function () {
//     return view('blogs.index');
// });

// ! route: auth ! inactive
Route::group(['prefix' => 'auth'], function () {
    Route::get('/login', function () {
        return view('auth.login');
    });
    
    Route::get('/register', function () {
        return view('auth.register');
    });
});

// * route: blog
Route::group(['prefix' => 'blog'], function () {
    Route::get('/index', function () {
        return view('blogs.index');
    });

    Route::get('/index/post', function () {
        return view('blogs.view');
    });

    Route::get('/blog', 'Blog\PostController@index')->name('blogs');
    Route::get('/blog/posts/{id}', 'Blog\PostController@show')->name('blogs.show');
});

// * route: admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('/index', function () {
        return view('admin.index');
    });

    Route::resource('/posts', 'PostController');

    Route::resource('/tags', 'TagController')->except([
        'show'
    ]);

});
