<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//view()->share('cpanel',url('public/cpanel'),'/');
//define('cp','cpanel/');
//define('cp_url','public/cpanel/');






Route::auth();

//Route::get('home','HomeController@home');
Route::get('About_us','HomeController@About_us');
Route::get('contactUs','HomeController@contactUs');
Route::get('homeeeee','HomeController@homeeeee');
Route::get('admin','HomeController@admin');
Route::get('newPassword','HomeController@newPassword');
Route::post('newPassword','HomeController@changePassword');


Route::get('addExhibits','exhibitsController@addExhibits');
Route::get('updateExhibits/{id}','exhibitsController@updateExhibits');
Route::post('addExhibits','exhibitsController@saveExhibits');

Route::get('electronics','exhibitsController@electronics');
Route::get('Real_estates','exhibitsController@Real_estates');
Route::get('Electricians','exhibitsController@Electricians');
Route::get('home_electrics','exhibitsController@home_electrics');
Route::get('Industrial_electrics','exhibitsController@Industrial_electrics');
Route::get('Vehicles','exhibitsController@Vehicles');
Route::get('cars','exhibitsController@cars');
Route::get('tractors','exhibitsController@tractors');
Route::get('motors','exhibitsController@motors');
Route::get('houseWare','exhibitsController@houseWare');
//Route::post('changePassword','HomeController@changePassword');


Route::get('ServiceNews','NewsController@ServiceNews');
Route::get('JobsChances','NewsController@JobsChances');
Route::get('gold','NewsController@gold');
Route::get('Tenders','NewsController@Tenders');
Route::get('Meteorological','NewsController@Meteorological');






Route::get('/add-to-cart/{id}',[
    'uses'=>'ProdectController@getAddToCard',
    'as'=>'prodect.addToCart'
]);
Route::get('/shopping-Cart',[
    'uses'=>'ProdectController@getCart',
    'as'=>'prodect.shoppingCart'
]);
Route::get('/checkout',[
    'uses'=>'ProdectController@getCheckout',
    'as'=>'checkout'

]);
Route::post('/checkout',[
    'uses'=>'ProdectController@postCheckout',
    'as'=>'checkout'
]);
//Route::get('/',[
//    'uses'=>'ProdectController@getIndex',
//    'as'=>'prodect.index'
//]);
Route::get('/', function () {
    return view('homee.homeeeee');

});
Route::get('bay','ProdectController@bay');

Route::get('/home', 'HomeController@index');


Route::post('/buyItem', 'AjaxController@buyItem');
Route::post('/cancelBuyRequest', 'AjaxController@cancelBuyRequest');
Route::post('/acceptBuyRequest', 'AjaxController@acceptBuyRequest');
Route::post('/rejecttBuyRequest', 'AjaxController@rejecttBuyRequest');
Route::post('/deleteExhabit', 'AjaxController@deleteExhabit');
Route::post('/acceptBuy', 'AjaxController@acceptBuy');
Route::post('/deleteProduct', 'AjaxController@deleteProduct');
Route::post('/showUserInfoModal', 'AjaxController@showUserInfoModal');
Route::post('/getSearchResults', 'AjaxController@getSearchResults');



Route::get('/edit/{id}', 'exhibitsController@editExhabit');
Route::post('/edit/{id}', 'exhibitsController@saveEditExhabit');

//
//Route::get('addForums','FormsController@addForums');
//Route::get('Cultural_Forum','FormsController@Cultural_Forum');
//Route::get('Scientific_Forum','FormsController@Scientific_Forum');
//Route::get('Economic_Forum','FormsController@Economic_Forum');
//Route::get('Sports_Forum','FormsController@Economic_Forum');
////
//Route::group(['prefix'=>cp,'middleware'=>'auth'],function (){
//    Route::get('/','Cpanel\HomeController@index');
//    Route::get('/','Cpanel\HomeController@index');
//    Route::get('/','Cpanel\HomeController@index');
//    Route::get('home','Cpanel\HomeController@index');
//    Route::get('setting','Cpanel\SettingController@index');
//    Route::post('setting','Cpanel\SettingController@store');
////    Route::get('/users/{id}', 'cpanel\users\HomeController@show');
//});