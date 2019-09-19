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

// Route::get('/', function () {
//     return view('welcome');
// });


//  1
//una ruta para responder a www.misitio.com = Route::get('/');
// Route::get('/',function(){
//     return  "Hola desde la pagina de inicio";
// });


//   2
//mandar a una carpeta
// Route::get('contacto',function(){
//     return  "Pagina de contacto";
// });

// 3 
// si definimos asi el parametro es obligatorio
// Route::get('saludos/{nombre}',function($nombre){
//     return "Saludos $nombre";
// });


// 4
// para que no sea obligatorio un ? al final de parametro y asignamos un valor por defecto
// Route::get('saludos2/{nombre?}',function($nombre = "benja"){
//     return "Saludos $nombre";
// });

// 5
// evitar que ingresen numeros
// Route::get('saludos2/{nombre?}',function($nombre = "benja"){
//     return "Saludos $nombre";
// })->where('nombre',"[A-Za-z]+"); //validad parametros con expresiones regulares


// 6
// se hara referencia al nombre de la ruta y no la URL
// Route::get('/',function(){
//     echo "<a href=" . route('contactos') .">Contacto</a><br>";
//     echo "<a href=" . route('contactos').">Contacto</a><br>";
//     echo "<a href=" . route('contactos').">Contacto</a><br>";
//     echo "<a href=" . route('contactos').">Contacto</a><br>";
//     echo "<a href=" . route('contactos').">Contacto</a><br>";
// });

// Route::get('contactanos',['as' => 'contactos', function(){
//     return "contactos";
// }]);



// VISTAS

// se hara referencia al nombre de la ruta y no la URL
// Route::get('/',['as' => 'home', function(){
//      return view('home');
// }]);

Route::get('/',['as' => 'home','uses' =>'PagesController@home']);
// Route::get('/', function(){
//     echo "<h1>hola</h1>";
// });
// Route::get('menu', function(){
//     echo "<h1>este es el menu</h1>";
// });

// Route::get('contactos',['as' => 'contactame',function(){
//     return view('contacto');
// }]);

Route::get('contactos',['as' => 'contactame', 'uses' =>'PagesController@hereContacto']);

// Route::get('saludos/{nombre?}',['as' => 'saludos',function($nombre = "benja"){
//     $html = "<h1>Este mensaje bonito</h1>";
//     // $consolas = ["Play","Xbox","Wii"];
//     $consolas = ["Play","nintendo"];
//     return view('saludo', compact('nombre','html','consolas')); 
// }])->where('nombre',"[A-Za-z]+"); 

Route::get('saludos/{nombre?}',['as' => 'saludos','uses' => 'PagesController@saludoMen'])->where('nombre',"[A-Za-z]+");


Route::post('contacto','PagesController@sendMensaje');

// REST
Route::get('mensaje',['as' => 'mensaje.index' , 'uses' => 'MensajeContoller@index']);
Route::get('mensaje/create',['as' => 'mensaje.create' , 'uses' => 'MensajeContoller@create']);
Route::post('mensaje',['as' => 'mensaje.store' , 'uses' => 'MensajeContoller@store']);
Route::get('mensaje/{id}',['as' => 'mensaje.show' , 'uses' => 'MensajeContoller@show']);
Route::get('mensaje/{id}/edit',['as' => 'mensaje.edit' , 'uses' => 'MensajeContoller@edit']);
Route::put('mensaje/{id}',['as' => 'mensaje.update' , 'uses' => 'MensajeContoller@update']);
Route::delete('mensaje/{id}',['as' => 'mensaje.destroy' , 'uses' => 'MensajeContoller@destroy']);
