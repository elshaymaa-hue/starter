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
    $obj= new \stdClass();
    $obj->name='Elshaymaa';
    $obj->age=47;
    $obj->gender='female';
    //return view('welcome',$data);//->with(['string'=>'Elshaymaa Nassar','age'=>'47']);
    return view ('welcome',compact('obj'));
});
Route::get('/landing', function () {
    return view('landing');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/show-number/{id}', function ($id) {
    return $id;
})->name('a');
Route::get('/show-string/{id?}', function () {
    return'welcome';
})->name ('b');

Route::namespace('Front')->group(function(){
//all rout only access controller or methods in folder front
    Route::get('users','UserController@showUserName');
});
//Route::group(['prefix' => 'users'],function(){
//    Route::get('/',function(){
//        return 'work';
//    });
//    Route::get('show','UserController@showUserName');
//    Route::delete('delete','UserController@showUserName');
//    Route::get('edit','UserController@showUserName');
//    Route::get('update','UserController@showUserName');
//});
Route::namespace('Admin')->group(function() {
    Route::get('second', 'SecondController@showString0');
    Route::get('second1', 'SecondController@showString1');
    Route::get('second2', 'SecondController@showString2');
    Route::get('second3', 'SecondController@showString33');
});
Route::get('index','Front\UserController@getIndex');


//Route::group(['middleware'=>'auth'],function (){
//   Route::get('users','UserController@index') ;
//});
Route::resource('news','NewsController');


//Route::get('news','NewsController@index');
//Route::post('news','NewsController@store');
//Route::get('news/create','NewsController@create');
//Route::get('news/{id}','NewsController@show');
//Route::get('news/{id}/edit','NewsController@edit');
//Route::post('update/{id}','NewsController@update');
//Route::delete('news/{id}/edit','NewsController@delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
