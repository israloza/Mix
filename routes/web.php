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


Route::get('/', function () {
    return view('welcome');
});*/
Route::get("/",function (){
    return view("Template.template");
});
Route::resource('PersonasFisicas','PersonasFisicasController');
Route::get('PersonasFisicas/{id}/destroy',[
    'uses' => 'PersonasFisicasController@destroy',
    'as' => 'PersonasFisicas.destroy'
    ]);

Route::resource('Administradores','AdminstradoresController');

Route::resource('PersonasMorales','PersonasMoralesController');
Route::get('PersonasMorales/{id}/destroy',[
    'uses' => 'PersonasMoralesController@destroy',
    'as' => 'PersonasMorales.destroy'
]);

Route::resource('Logins','LoginsController');

Route::resource('ModalidadesOtrosTipos','ModalidadesOtrosTiposController');

Route::resource('SujetosObligados','SujetosObligadosController');

Route::resource('Municipios','MunicipiosController');
Route::get('Municipios/{id}/destroy',[
    'uses' => 'MunicipiosController@destroy',
    'as' => 'Municipios.destroy'
]);

Route::resource('InformacionesSolicitadas','InformacionesSolicitadasController');
Route::get('InformacionesSolicitadas/{id}/destroy',[
    'uses' => 'InformacionesSolicitadasController@destroy',
    'as' => 'InformacionesSolicitadas.destroy'
]);

Route::resource('ModalidadesEntrega','ModalidadesEntregaController');
Route::get('ModalidadesEntrega/{id}/destroy',[
    'uses' => 'ModalidadesEntregaController@destroy',
    'as' => 'ModalidadesEntrega.destroy'
]);

Route::resource('DatosPersonales','DatosPersonalesController');
Route::get('DatosPersonales/{id}/destroy',[
    'uses' => 'DatosPersonalesController@destroy',
    'as' => 'DatosPersonales.destroy'
]);