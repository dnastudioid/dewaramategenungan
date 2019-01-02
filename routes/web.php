<?php

use App\Http\Controllers\Frontend\HomeController;

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
Auth::routes();

/* THIS IS START THE FRONTEND ROUTES */
Route::namespace('Frontend')->group(function(){
    Route::get('/', 'HomeController@index');
    Route::get('article/read/{slug}', 'ArticleController@read');
    Route::get('article','ArticleController@all');
    Route::post('article/{id}', 'ArticleController@comment');
});

/* END OF THE FRONTEND ROUTES */

/* THIS IS START THE BACKEND ROUTES */

Route::get('/login', function(){
    return view('backend.login');
});

Route::get('/home', function(){
    return redirect('/redirecting');
});

Route::get('/redirecting', function(){
    if(Auth::user()->role == 'master'){
        return redirect('master');
    }
    elseif(Auth::user()->role == 'admin'){
        return redirect('admin');
    }
});

Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::get('/', function(){
        return redirect('admin/dashboard');
    });
    Route::get('dashboard', 'DashboardController@index');

    /* Pradipta */
    
    /**************** CATEGORY ****************/
    Route::get('article/category', 'ArticleController@category');
    Route::post('article/category', 'ArticleController@addCategory');
    Route::get('article/category/{id}', 'ArticleController@editCategory');
    Route::put('article/category/{id}', 'ArticleController@updateCategory');
    Route::delete('article/category/{id}', 'ArticleController@deleteCategory');

    /**************** ARTICLE *****************/
    Route::get('article', 'ArticleController@index');
    Route::get('article/create', 'ArticleController@create');
    Route::post('article', 'ArticleController@store');
    Route::get('article/{id}/edit', 'ArticleController@edit');
    Route::put('article/{id}/edit', 'ArticleController@update');
    Route::delete('article/{id}', 'ArticleController@delete');

    /**************** COMMENT *****************/
    Route::get('comment', 'CommentController@index');
    Route::post('comment/approve/{id}', 'CommentController@approve');
    Route::post('comment/notapprove/{id}', 'CommentController@disapprove');
    Route::delete('comment/{id}', 'CommentController@delete');
    /* End Pradipta */

    /* Dityaherdi */
    Route::resource('package', 'PackageController');
    /* End Dityaherdi */
});


/* END OF THE BACKEND ROUTES */



