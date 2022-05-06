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


Route::get('/', function () {
    return view('welcome');
});
*/

//page erreur 404
Route::fallback(function (){
    return view('404');
});


Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/partner/', 'App\Http\Controllers\HomeController@parnerliste')->name('parnerliste');


Route::get('/about', function () {
    return view('home/about');
})->name('about');

Route::get('services', function () {
    return view('home/services');
})->name('services');

Route::get('projet', function () {
    return view('home/projects');
})->name('projects');

Route::get('blog', function () {
    return view('home/blog');
})->name('blog');

Route::get('contact', function () {
    return view('home/contact');
})->name('contact');


Route::post('lang', function () {
    return 'Change langues';
})->name('langchange');



Route::get('/login',function(){
    return view('home/login');
})->name('loginpage');

Route::get('/forgetpass',function(){
    return view('home/passforget');
})->name('forgetpass');


//ADMIN PAGES
Route::get('/admin','App\Http\Controllers\DashpageController@index')->name('adminpage');
//Slide Shows

Route::resource('slide', 'App\Http\Controllers\SlideController')->names([
    'index'=> 'listslide',
    'show'=> 'viewslide',
    'create'=> 'newslide',
    'store',
    'edit'=>'editslide',
    'update',
    'destroy'
]);
//Slide Shows


//Partners
Route::resource('partners', 'App\Http\Controllers\PartnerController')->names([
    'index'=> 'listpartner',
    'show',
    'create'=> 'newpartner',
    'store'=>'insertpartner',
    'edit'=>'editpartner',
    'update' =>'addupdpartner',
    'destroy'=>'delpartner'
]);
Route::get('/delpartener','App\Http\Controllers\PartnerController@sofderestore')->name('listedelpartener');
Route::get('/restoredestroy/{id}','App\Http\Controllers\PartnerController@restoredestroy')->name('restoredelepartener');
Route::delete('/destoredefinitely/{id}','App\Http\Controllers\PartnerController@destoredefinitely')->name('deletecompletepartener');
//fin les routes de categorie
//Partners


//Status
Route::resource('status', 'App\Http\Controllers\StatusController')->names([
    'index'=> 'liststatus',
    'show',
    'create',
    'store',
    'edit',
    'update',
    'destroy'
]);
//Status
