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

//IMPORTANDO CONTROLLERS PARA O ARQUIVO DE ROTAS
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']); // retornará o método index da classe EventController

Route::get('/events/create', [EventController::class, 'create']); 

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/product', function () {
    $busca = request('search');

    return view('product', ['busca'=> $busca]); // INSERIR NA URL, APÓS O FINAL DA ROTA, O PARÂMETRO ?search=algo aqui
});

Route::get('/product_teste/{id?}', function ($id = null) {
    return view('product', ['id'=> $id]);
});