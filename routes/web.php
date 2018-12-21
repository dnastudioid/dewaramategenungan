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
    Route::resource('article', 'ArticleController');
    /* End Pradipta */

    /* Dityaherdi */
    Route::resource('package', 'PackageController');
    /* End Dityaherdi */
});


/* END OF THE BACKEND ROUTES */



