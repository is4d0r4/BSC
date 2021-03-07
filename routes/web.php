<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', ['as' => 'site.home', 'uses' => 'Site\LoginController@index']);

Route::get('/login', ['as' => 'site.login', 'uses' => 'Site\LoginController@index']);

Route::get('/login/sair', ['as' => 'site.login.sair', 'uses' => 'Site\LoginController@sair']);

Route::post('/login/entrar', ['as' => 'site.login.entrar', 'uses' => 'Site\LoginController@entrar']);





Route::group(['middleware' => 'auth'], function () {

  Route::get('/admin/cursos', ['as' => 'admin.cursos', 'uses' => 'BaseController@index']);



//  Cronograma
Route::get('/admin/home/cronograma_desenvolvimento', ['as' => 'admin.cronograma.desen', 'uses' => 'BaseController@cronograma']);
Route::get('/admin/home/cronograma_nivelum', ['as' => 'admin.cronograma.nivelum', 'uses' => 'BaseController@cronograma']);
Route::get('/admin/home/cronograma_niveldois', ['as' => 'admin.cronograma.niveldois', 'uses' => 'BaseController@cronograma']);
Route::get('/admin/home/cronograma_astec', ['as' => 'admin.cronograma.astec', 'uses' => 'BaseController@cronograma']);

// Documentação
Route::get('/admin/home/documentacao_desenvolvimento', ['as' => 'admin.documentacao.desen', 'uses' => 'BaseController@documentacao']);
Route::get('/admin/home/documentacao_nivelum', ['as' => 'admin.documentacao.nivelum', 'uses' => 'BaseController@documentacao']);
Route::get('/admin/home/documentacao_niveldois', ['as' => 'admin.documentacao.niveldois', 'uses' => 'BaseController@documentacao']);
Route::get('/admin/home/documentacao_astec', ['as' => 'admin.documentacao.astec', 'uses' => 'BaseController@documentacao']);

// Link
Route::get('/admin/home/links_desenvolvimento', ['as' => 'admin.links.desen', 'uses' => 'BaseController@link']);
Route::get('/admin/home/links_nivelum', ['as' => 'admin.links.nivelum', 'uses' => 'BaseController@link']);
Route::get('/admin/home/links_niveldois', ['as' => 'admin.links.niveldois', 'uses' => 'BaseController@link']);
Route::get('/admin/home/links_astec', ['as' => 'admin.links.astec', 'uses' => 'BaseController@link']);

});

