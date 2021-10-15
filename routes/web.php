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

Route::resource('Pedidos', 'PedidoController')->middleware('sesiones');

Route::resource('empleados', 'EmpleadoController');

Route::resource('clientes', 'ClienteController');

Route::resource('Categorias', 'CategoriaController');

Route::resource('Usuarios', 'UsuarioController');

Route::resource('Tipos', 'TipoController');

Route::resource('Roles', 'RolController');

Route::resource('PedidosProductos', 'pedidoDeProductoController');

Route::resource('Marcas', 'MarcaController');


//Rutas get

Route::get('Productos/{Producto}/habilitar' , "ProductoController@habilitar");

Route::get('Pedidos/{pedido}/estadopedido', "PedidoController@estadopedido");

Route::get('empleados/{empleado}/habilitar' , "EmpleadoController@habilitar");

//php artisan  make:controller
//EmpleadoController --resource --model=Empleado

Route::get('clientes/{cliente}/habilitar' , "ClienteController@habilitar");

//RUTAS DE AUTENTICACION
Route::resource('usuarios', 'UserController');


//Carrito

Route::get('carrito', 'CarritoController@index')->name('carrito.shop')->middleware('cliente');

Route::get('add-to-cart/{idpedidProducto}', 'CarritoController@addTocart');

Route::get('cart' , 'CarritoController@cart')->name('cart.view');


//Route pagina
Route::get('/', function (){
    return view('pagina.index');
})->name('inicio');



Route::resource('datoscliente', 'DatosClienteController');


Route::resource('usuarios', 'UserController');
Route::get('registrar' , 'UserController@create')->name('registrar.form');

//Rutas de autenticacion

Route::get('login' , 'Auth\LoginController@form')->name('login.form');
Route::post('login' , 'Auth\LoginController@login')->name('login.verify');
Route::get('logout' , 'Auth\LoginController@logout')->name('logout.auth');
