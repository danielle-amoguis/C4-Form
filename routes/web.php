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

Route::get('/sender', function(){
    $pdf = App::make('snappy.pdf.wrapper');
    $pdf->loadview('forms.pdf');
    return $pdf->stream('forms.pdf.pdf');
});
Route::get('layout', function(){
    return view('forms.pdf');
});
Route::resource ('forms', 'FormController');
// Route::post('forms/upload', 'FormController@upload');
// Route::get('forms/pdf', 'FormController@pdf')->name('forms.pdf');
// Route::get('/forms/sender', 'FormController@send')->name('forms.sender');
// Route::resource ('forms', 'FormController');