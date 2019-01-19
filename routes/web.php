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
Route::get('/',function(){
//    event(new \App\Events\UserActivation(\App\User::find(1)));
    return 'done';
});

Route::get('/user/active/email/{token}' , 'UserController@activation')->name('activation.account');


Route::get('u',function(){
    return $u=\App\User::create([
        'name'=>'Mahan',
        'email'=>'mahan.kabir@gmail.com',
        'password'=>'123456',
    ]);

});

Route::group(['namespace' => 'Admin' , 'middleware' => ['auth:web' , 'checkAdmin'], 'prefix' => 'admin'],function (){
    $this->get('/panel','PanelController@panel');
    $this->resource('/panel/book','BookController');
    $this->resource('/panel/lesson','LessonController');
});
Route::group(['prefix'=>'user'],function(){

    $this->get('/book','MasterController@book');
    $this->resource('/profile','User\UserController');

    $this->get('/course','MasterController@course');
});
Route::group(['middleware'=>'auth:web'],function(){
    $this->post('/course/payment','CourseController@payment');
    $this->get('/course/payment/check','CourseController@checker');

});

Route::group(['namespace' => 'Auth'],function(){
    // Authentication Routes...
    $this->get('login', 'LoginController@showLoginForm')->name('login');
    $this->post('login', 'LoginController@login');
    $this->get('logout', 'LoginController@logout')->name('logout');

    // Registration Routes...
    $this->get('register', 'RegisterController@showRegistrationForm')->name('register');
    $this->post('register', 'RegisterController@register');

    // Password Reset Routes...
    $this->get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    $this->post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    $this->get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    $this->post('password/reset', 'ResetPasswordController@reset');
});

