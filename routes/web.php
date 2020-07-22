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

Route::get('/', 'HomeController@index')->name('home');

Route::post('/',  function(){
    Mail::raw($_POST['message']
    , function($m){
        $m->from('patrickvieiramota@gmail.com', 'Patrick');
        $m->to('patrickvieiramota@gmail.com');
        $m->subject('Contato - Patrick Mota');
        $m->replyTo($_POST['email'], $_POST['name']);
        
    });
    return back()->withInput();
    
})->name('send');
