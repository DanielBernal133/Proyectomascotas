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


Route::get('variables', function(){
    echo 'Hola';
} );


Route::resource('Productos', 'ProductoController');

Route::resource('Pedidos', 'PedidoController');

Route::resource('Empleados', 'EmpleadoController');

Route::resource('Clientes', 'ClienteController');

Route::resource('Categorias', 'CategoriaController');

Route::resource('Usuarios', 'UsuarioController');

Route::resource('Tipos', 'TipoController');

Route::resource('Roles', 'RolController');

Route::resource('PedidosProductos', 'pedidoDeProductoController');

Route::resource('Marcas', 'MarcaController');

//php artisan  make:controller
//EmpleadoController --resource --model=Empleado

