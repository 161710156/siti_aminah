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

Route ::get('/about', function (){
	return '<h1>Halo</h1>'
	.'Selamat datang di webapp saya<br>'
	.'Laravel, emang keren';
});

Route ::get('user/{nama}', function($a){
	return 'Nama saya Adalah <b>'.$a.'<b>';
});

Route ::get('kantin/{menu}/{nama}/{ngemil}', function($a,$b,$c){
	return 'Makan '.$a.'<br>'
	 	  .'Minum '.$b.'<br>'
	 	  .'Ngemil '.$c;

});

Route ::get('user/{nama?}',function($a = "Dadang Conelo"){
	return $a;
});