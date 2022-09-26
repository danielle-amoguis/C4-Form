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

use Knp\Snappy\Pdf;
Route::get('/', function () {
    return view('forms.index');
});

Route::get('layout', function(){
    return view('forms.pdf');
});

Route::get('forms/renderPDF', 'FormController@renderPDF')->name('render-pdf');
Route::get('forms/downloadExcel', 'FormController@downloadExcel')->name('download-excel');

Route::resource ('forms', 'FormController');
