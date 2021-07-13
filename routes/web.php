<?php

use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'ProdutoController@index')->name('home');
Route::get('produto/{id}', 'ProdutoController@show')->name('produto');
Route::get('/comprar-produto/{id_produto}', 'PedidoController@store')->name('comprar-produto');

Auth::routes();

Route::get('/perfil', [App\Http\Controllers\HomeController::class, 'show'])->name('perfil');
Route::get('/editar-perfil/{id?}', 'HomeController@edit')->name('editar-perfil');
Route::post('/edita-perfil/{id?}', 'HomeController@update')->name('edita-perfil');

Route::get('/meus-pedidos', 'PedidoController@show')->name('meus-pedidos');
Route::get('/pagar-meu-pedido/{id}/{acao}', 'PedidoController@update')->name('pagar-meu-pedido');
Route::get('/cancelar-meu-pedido/{id}', 'PedidoController@destroy')->name('cancelar-meu-pedido');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/pedidos', 'PedidoController@index')->name('pedidos')->middleware(Admin::class);
Route::get('/aprovar-pedido/{id}', 'PedidoController@update')->name('aprovar-pedido')->middleware(Admin::class);
Route::get('/cancelar-pedido/{id}', 'PedidoController@destroy')->name('cancelar-pedido')->middleware(Admin::class);

Route::get('/produtos', 'AdminController@index')->name('produtos');
Route::get('/cadastrar-produto', 'AdminController@create')->name('cadastrar-produto');
Route::post('cadastra-produto', 'AdminController@store')->name('cadastra-produto');
Route::get('/apagar-produto/{id}', 'AdminController@destroy')->name('apagar-produto');

Route::get('/usuarios', 'AdminController@UsuariosIndex')->name('usuarios');
//Route::get('/aprovar-pedido/{id}', 'PedidoController@update')->name('aprovar-pedido')->middleware(Admin::class);





