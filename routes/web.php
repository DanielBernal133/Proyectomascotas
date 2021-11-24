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



Route::resource('Productos', 'ProductoController')->middleware('sesiones');

Route::resource('Pedidos', 'PedidoController')->middleware('sesiones');

Route::resource('empleados', 'EmpleadoController')->middleware('sesiones');

Route::resource('clientes', 'ClienteController')->middleware('sesiones');

// Route::resource('Categorias', 'CategoriaController')->middleware('sesiones');

Route::resource('Usuarios', 'UsuarioController');

Route::resource('Tipos', 'TipoController')->middleware('sesiones');

Route::resource('Roles', 'RolController')->middleware('sesiones');

Route::resource('PedidosProductos', 'pedidoDeProductoController')->middleware('sesiones');

Route::resource('Marcas', 'MarcaController')->middleware('sesiones');


//Rutas get

Route::get('Productos/{Producto}/habilitar' , "ProductoController@habilitar")->middleware('sesiones');

Route::get('Pedidos/{pedido}/estadopedido', "PedidoController@estadopedido")->middleware('sesiones');

Route::get('empleados/{empleado}/habilitar' , "EmpleadoController@habilitar")->middleware('sesiones');


//Rutas get


//php artisan  make:controller
//EmpleadoController --resource --model=Empleado

Route::get('clientes/{cliente}/habilitar' , "ClienteController@habilitar")->middleware('sesiones');

//RUTAS DE AUTENTICACION


//Carrito

Route::get('carrito', 'CarritoController@index')->name('carrito.shop')->middleware('sesionesCli');

Route::get('add-to-cart/{idpedidProducto}', 'CarritoController@addTocart')->middleware('sesionesCli');

Route::get('cart' , 'CarritoController@cart')->name('cart.view')->middleware('sesionesCli');

Route::delete('remove-from-cart', 'CarritoController@remove');


//Route pagina
Route::get('/', function (){
    return view('pagina.index');
})->name('inicio');



Route::resource('datoscliente', 'DatosClienteController');


Route::resource('usuarios', 'UserController');
Route::resource('usuarios2', 'UsuarioController');
Route::get('registrar' , 'UserController@create')->name('registrar.form');

//Rutas de autenticacion
Route::get('login' , 'Auth\LoginController@form')->name('login.form');
Route::post('login' , 'Auth\LoginController@login')->name('login.verify');
Route::get('logout' , 'Auth\LoginController@logout')->name('logout.auth');
Route::get('perfil', 'Auth\LoginController@perfil');

//rutas de envio de correo
Route::get('confirmar-correo', 'Auth\ResetPasswordController@emailform');
Route::post('enviar-link', 'Auth\ResetPasswordController@submitlink')-> name ("send.link");
Route::get('reset-password/{token}', 'Auth\ResetPasswordController@resetform');
Route::post('reset-password', 'Auth\ResetPasswordController@resetpassword')-> name ("reset.password");

//ruta pdf
Route::get('pdfprod', 'PDFControllerProducto@pdf');
Route::get('pdfclie', 'PDFControllerCliente@pdf');
Route::get('pdfemple', 'PDFControllerEmpleado@pdf');
Route::get('pdfpedi', 'PDFControllerPedido@pdf');
