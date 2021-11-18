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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group (['middleware' => 'auth'], function (){

Route::get('/funcionario','App\Http\Controllers\FuncionarioController@list');
Route::get('/quadra','App\Http\Controllers\QuadraController@list');
Route::get('/bola','App\Http\Controllers\BolaController@list');
Route::get('/jogador','App\Http\Controllers\JogadorController@list');
Route::get('/agendahorario','App\Http\Controllers\AgendaHorarioController@list');


Route::get('/funcionario/create','App\Http\Controllers\FuncionarioController@create');
Route::get('/quadra/create','App\Http\Controllers\QuadraController@create');
Route::get('/bola/create','App\Http\Controllers\BolaController@create');
Route::get('/jogador/create','App\Http\Controllers\JogadorController@create');
Route::get('/agendahorario/create','App\Http\Controllers\AgendaHorarioController@create');


Route::post('/funcionario/save/{id}','App\Http\Controllers\FuncionarioController@save');
Route::post('/quadra/save/{id}','App\Http\Controllers\QuadraController@save');
Route::post('/bola/save/{id}','App\Http\Controllers\BolaController@save');
Route::post('/jogador/save/{id}','App\Http\Controllers\JogadorController@save');
Route::post('/agendahorario/save/{id}','App\Http\Controllers\AgendaHorarioController@save');


Route::get('/funcionario/edit/{id}','App\Http\Controllers\FuncionarioController@edit');
Route::get('/quadra/edit/{id}','App\Http\Controllers\QuadraController@edit');
Route::get('/bola/edit/{id}','App\Http\Controllers\BolaController@edit');
Route::get('/jogador/edit/{id}','App\Http\Controllers\JogadorController@edit');
Route::get('/agendahorario/edit/{id}','App\Http\Controllers\AgendaHorarioController@edit');


Route::get('/funcionario/delete/{id}','App\Http\Controllers\FuncionarioController@delete');
Route::get('/quadra/delete/{id}','App\Http\Controllers\QuadraController@delete');
Route::get('/bola/delete/{id}','App\Http\Controllers\BolaController@delete');
Route::get('/jogador/delete/{id}','App\Http\Controllers\JogadorController@delete');
Route::get('/agendahorario/delete/{id}','App\Http\Controllers\AgendaHorarioController@delete');


Route::post('/funcionario/search','App\Http\Controllers\FuncionarioController@search');
Route::post('/quadra/search','App\Http\Controllers\QuadraController@search');
Route::post('/bola/search','App\Http\Controllers\BolaController@search');
Route::post('/jogador/search','App\Http\Controllers\JogadorController@search');
Route::post('/agendahorario/search','App\Http\Controllers\AgendaHorarioController@search');


Route::get('pdfFuncionario', 'App\Http\Controllers\PdfFuncionarioController@geraPdf');
Route::get('pdfAgendaHorario', 'App\Http\Controllers\PdfAgendaHorarioController@geraPdf');


});
