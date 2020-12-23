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
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('welcome');
// });


// Login
Route::get('/login', 'UserController@getLogin');
Route::post('/login', 'UserController@postLogin');
Route::get('/logout', 'UserController@getLogout');

Route::get('/', 'FrontController@home');
Route::get('/trang-chu', 'FrontController@home');
Route::get('/thong-ke', 'FrontController@news');
Route::get('/ban-do-dich', 'FrontController@getmaps');
// Route::get('/time-line', 'FrontController@timelinelist');



Route::get('{slug}.html', 'FrontController@slugHtml');
Route::get('{slug}', 'FrontController@slug');



// ADMINSTRATOR

Route::group(['prefix' => 'admin', 'middleware' =>'auth'], function (){
    // welcome to admin
    Route::get('/home', 'BackController@home');
    // Staff
    Route::group(['prefix' => 'staff'], function(){
        Route::get('profile','BackController@staff_profile');
        Route::post('profile','BackController@staff_profile_post');
        Route::get('list','BackController@staff_list');
        Route::get('add','BackController@staff_add');
        Route::post('add','BackController@staff_add_post');
        Route::get('edit/{id}','BackController@staff_edit');

        Route::post('edit/{id}','BackController@staff_edit_post');
        Route::get('delete/{id}','BackController@staff_delete');
    });
    // System
    Route::get('/system','BackController@system');
    Route::post('/system','BackController@system_post');

    //page
    Route::group(['prefix' => 'page'], function (){
        Route::get('list', 'BackController@page_list');
        Route::get('edit/{id}','BackController@page_edit');
        Route::post('edit/{id}','BackController@page_edit_post');
    });

    //patients
    Route::group(['prefix' => 'patient'], function(){
        Route::get('list','BackController@patient_list');
        Route::get('add','BackController@patient_add');
        Route::post('add','BackController@patient_add_post');
        Route::get('edit/{id}','BackController@patient_edit');

        Route::post('edit/{id}','BackController@patient_edit_post');
        Route::get('delete/{id}','BackController@patient_delete');

        Route::get('map/{id}','BackController@patient_map');
        Route::post('map/{id}','BackController@patient_map_post');
    });

    Route::group(['prefix' => 'map'], function(){
        Route::get('list','BackController@map_list');
        Route::get('add','BackController@map_add');
        Route::post('add','BackController@map_add_post');
        Route::get('edit/{id}','BackController@map_edit');

        Route::post('edit/{id}','BackController@map_edit_post');
        Route::get('delete/{id}','BackController@map_delete');
        Route::get('show','BackController@map_show');
    });

    //new category
    Route::group(['prefix' => 'news_cat'], function (){
        Route::get('list', 'BackController@news_cat_list');
        Route::get('edit/{RowID}','BackController@news_cat_getedit');
        Route::post('edit/{RowID}','BackController@news_cat_edit');
    });

    //news
    Route::group(['prefix' => 'news'], function()
    {
        Route::get('list','BackController@news_list');
        Route::get('add','BackController@news_getadd');
        Route::post('add','BackController@news_add');
        Route::get('edit/{RowID}','BackController@news_getedit');
        Route::post('edit/{RowID}','BackController@news_edit');
        Route::get('delete/{RowID}','BackController@news_delete');
        Route::get('sort/{id}','BackController@news_cat_update_sort');
    });
});


Route::get('/maps', 'PageController@getmaps');

