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

Route::get('/', 'HomeController@index')->name("root");
Route::get('/technologies', 'TechnologyController@index')->name('technologies.index');
Route::get('/services', 'ServiceController@index')->name('services.index');
Route::get('/services/{slug}', 'ServiceController@show')->name('services.show');
Route::get('/articles', 'ArticleController@index')->name('articles.index');
Route::get('/articles/type/{slug}', 'ArticleController@category')->name('articles.category');
Route::get('/articles/{slug}', 'ArticleController@show')->name('articles.show');

//Dịch vụ thiết kế
Route::get('thiet-ke-website', 'DesignController@design')->name('website.design');
Route::get('thiet-ke-website-doanh-nghiep', 'DesignController@designCompany')->name('company.design');

Route::get('thiet-ke-website-landing-page', 'DesignController@designLanding')->name('landing-page.design');

Route::get('thiet-ke-website-ban-hang', 'DesignController@designEcommerce')->name('ecommerce.design');

Route::get('bang-gia-thiet-ke-website', 'HomeController@price')->name('prices.index');
Route::get('lien-he', 'ContactController@index')->name('contact.index');
Route::post('orders', 'OrderController@store')->name('orders.store');
Route::get('orders/create', 'OrderController@create')->name('orders.create');

Route::get('/bang-gia', function () {
    return redirect()->to(route('prices.index'));	
});