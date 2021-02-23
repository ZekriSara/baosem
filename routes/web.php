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
Auth::routes();

Route::get('/connexion','Auth\LoginController@connexion')->name("connexion");


Route::get('/login','Auth\LoginController@authenticated')->name('login');
Route::post('/Register','Auth\RegisterController@register')->name('Register');
Route::get("/image/{image}",'AdminController@image');
Route::get("/back","AdminController@back");

Route::get('/home','HomeController@index');
Route::get('/Rech', 'AffichageController@index');
Route::get('/index', 'AffichageController@index');

Route::get('/Rech/action','AffichageController@action')->name('Rech.action');
Route::get('/recherche', 'AffichageController@rech_aff');
Route::get('/annonce/{id}','AffichageController@aff_details');
Route::get('/annonce/{id}/print','AffichageController@pdf');

Route::get('/admin','AdminController@index');

Route::get('/Admin/action','AdminController@action')->name('Admin.action');

Route::get('/admin/annonce',"AdminController@annonce");
Route::get('/admin/archive',"AdminController@archive");
Route::get('/admin/da',"AdminController@da");
Route::get('/admin/da/valider/{da}',"AdminController@valider");

Route::post('/admin/importer','AdminController@importer');
Route::get('/delete/{email}','AdminController@delete');

/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/




Route::get('/admin', 'AdminController@index')    
    ->middleware('is_admin')    
    ->name('admin');



Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout','HomeController@logout')->name('logout');
