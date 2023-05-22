<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UpaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('/upa/listar', [UpaController::class, 'listar']);
Route::get('/upa/novo', [UpaController::class, 'novo']);
Route::get('/upa/editar/{id}', [UpaController::class, 'editar']);
Route::get('/upa/excluir/{id}', [UpaController::class, 'excluir']);
Route::post('/upa/salvar', [UpaController::class, 'salvar']);

Route::get('/medico/listar', [UpaController::class, 'listar']);
Route::get('/medico/novo', [UpaController::class, 'novo']);
Route::get('/medico/editar/{id}', [UpaController::class, 'editar']);
Route::get('/medico/excluir/{id}', [UpaController::class, 'excluir']);
Route::post('/medico/salvar', [UpaController::class, 'salvar']);
