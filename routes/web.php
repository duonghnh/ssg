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
	return view('welcome');
});
Route::get('index', [
	'as' => 'trang-chu',
	'uses' => 'PageController@GetIndex',
]);
Route::get('search', [
	'as' => 'search',
	'uses' => 'PageController@GetSearch',
]);
Route::get('chuot', [
	'as' => 'chuot',
	'uses' => 'PageController@GetChuot',
]);
Route::get('ghe', [
	'as' => 'ghe',
	'uses' => 'PageController@GetGhe',
]);
Route::get('banphim', [
	'as' => 'banphim',
	'uses' => 'PageController@GetBanphim',
]);
Route::get('loa', [
	'as' => 'loa',
	'uses' => 'PageController@GetLoa',
]);
Route::get('luutru', [
	'as' => 'luutru',
	'uses' => 'PageController@GetLuutru',
]);
Route::get('phone', [
	'as' => 'phone',
	'uses' => 'PageController@GetPhone',
]);
Route::get('sac', [
	'as' => 'sac',
	'uses' => 'PageController@GetSac',
]);
Route::get('tainghe', [
	'as' => 'tainghe',
	'uses' => 'PageController@GetTainghe',
]);
