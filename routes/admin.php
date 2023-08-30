<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', 'Admin\SessionController@create')->name("admin.login");
Route::post('/login', 'Admin\SessionController@store')->name("admin.login");
Route::get('/logout', 'Admin\SessionController@destroy')->name("admin.logout");

Route::group(['namespace' => 'Admin', 'middleware' => 'auth.admin', 'as' => "admin."], function() {  	
    Route::get('/', 'HomeController@index')->name('root');
    
	Route::resources([
		'users' => 'UserController',
		'services' => 'ServiceController',
		'article-types' => 'ArticleTypeController',
		'articles' => 'ArticleController',
		'blogs' => 'BlogController',	
		'blog-types' => 'BlogTypeController',		
		'customers' => 'CustomerController',
		'technologies' => 'TechnologyController',
		'orders' => 'OrderController',
		'order-details' => 'OrderDetailController',
		'properties' => 'PropertyController',
		'admins' => 'AdminController',
		'settings' => 'SettingController',	
		'websites' => 'WebsiteController',
		'website-types' => 'WebsiteTypeController',	
		'prices' => 'PriceController',
		'price-properties' => 'PricePropertyController',
		'web-functions' => 'WebFunctionController',
		'price-functions' => 'PriceFunctionController',
		'photos' => 'PhotoController',
	]);  
});