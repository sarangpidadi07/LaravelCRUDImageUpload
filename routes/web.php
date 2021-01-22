<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxCRUDImageController;
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
Route::get('booklist', 'AjaxCRUDImageController@getBookList');

Route::get('ajax-datatable-crud', 'AjaxCRUDImageController@index');
Route::post('add-update-book', 'AjaxCRUDImageController@store');
Route::post('edit-book', 'AjaxCRUDImageController@edit');
Route::post('delete-book', 'AjaxCRUDImageController@destroy');