<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });=

// Route::get('foo', function () {
//     return 'Hello World';
// });

// Route::get('/user', [UserController::class, 'index']);

// Route::match(['get','post'], '/nyoba', function (){
//     return "Halaman ini bisa dibuka dengan Method get dan Post ya teman:D";
// });

// Route::any('/nyoba', function (){
//     return "Halaman ini bisa dibuka dengan semua Method ya teman:D";
// });


// //Buat route dengan method post
// Route::get('/form', function(){
//     return '
//     <form method=POST action="/prosesnya">
//     '. csrf_field() .' 
//     <label> Masukkan Namamu: </label>
//     <input type="text" name="nama" required>
//     <button type="submit">Kirim</button>
//     </form>
//     ';
// });
// //memproses data
// Route::post('/prosesnya', function(Request $request){
//     $nama = $request->input('nama');
//     return "Halo, " . $nama . "! Selamat datang di Laravel.";
// });


// //mencoba membuka redirect lewat browser
// Route::redirect('/github', 'https://github.com');

// //bisa mencoba antar halaman
// Route::get('/halamanbaru', function(){
//     return "ini adalaah halaman baru";
// });
// Route::redirect('/halamanlama', '/halamanbaru');

// Route::view('/welcome', 'welcome');

// Route::view('/welcome', 'halo', ['nama' => 'Dwi Bina Fitriono']);
    
// Route::get('user/{name?}', function ($name = null) {
//     return $name;
// });

// Route::get('user/{name?}', function($name = 'Dwi Bina Fitriono'){
//     return $name;
// });


// Route::get('user/{name?}', function($name) {
//     return $name;
// })->where('name', '[A-Za-z]+');

// Route::get ('user/{id}', function($id){
//     return $id;
// })->where('id', '[0-9]+');

// Route::get('user/{name}/{id}', function($name, $id){
//     return "Name: " . $name . ", ID: " . $id;
// })->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);


// Route::get('user/{id}', function($id){
//     return $id;
// });

// Route::get('search/{search}', function($search){
//     return $search;
// })->where('search', '.*');


//Acara 4 ANJAYYYYY

//kita definisikan dulu

// $url = route('profile');
// return redirect()->route('profile');