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
Route::get('/blade','PagesController@blade');

Route::get('/','PagesController@index');
/*
Route::get('user',function(){
    $users=[
        '0'=> ['first_name'=>'Ahmed',
                'last_name'=>'Aldawoud','location'=>'Iraq'
    ],
        '1'=> ['first_name'=>'Ali',
                'last_name'=>'Qasim','location'=>'Syria'
        ]
    ];
    return $users;
});
*/


Route::get('users/create',['uses'=>'UsersController@create']);
Route::get('users/login','UsersController@login');
Route::post('users/login','UsersController@loginCheck');
Route::post('users',['uses'=>'UsersController@store']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('');
Route::group(['middleware'=>'authenticated'],function(){
    Route::get('profile','PagesController@profile');
    Route::get('users','UsersController@index');
});