<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UpaController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\EspecialidadeController;
use App\Http\Controllers\EnfermeiraController;
use App\Http\Controllers\RecepcionistaController;

/*
|------------------------------------------------- -------------------------
| Rotas da Web
|------------------------------------------------- -------------------------
|
| Aqui é onde você pode registrar rotas da web para seu aplicativo. Esses
| as rotas são carregadas pelo RouteServiceProvider e todas elas serão
| ser atribuído ao grupo de middleware "web". Faça algo ótimo!
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

Route::get('/medico/listar', [MedicoController::class, 'listar']);
Route::get('/medico/novo', [MedicoController::class, 'novo']);
Route::get('/medico/editar/{id}', [MedicoController::class, 'editar']);
Route::get('/medico/excluir/{id}', [MedicoController::class, 'excluir']);
Route::post('/medico/salvar', [MedicoController::class, 'salvar']);

Route::get('/especialidade/listar', [EspecialidadeController::class, 'listar']);
Route::get('/especialidade/novo', [EspecialidadeController::class, 'novo']);
Route::get('/especialidade/editar/{id}', [EspecialidadeController::class, 'editar']);
Route::get('/especialidade/excluir/{id}', [EspecialidadeController::class, 'excluir']);
Route::post('/especialidade/salvar', [EspecialidadeController::class, 'salvar']);

Route::get('/enfermeira/listar', [EnfermeiraController::class, 'listar']);
Route::get('/enfermeira/novo', [EnfermeiraController::class, 'novo']);
Route::get('/enfermeira/editar/{id}', [EnfermeiraController::class, 'editar']);
Route::get('/enfermeira/excluir/{id}', [EnfermeiraController::class, 'excluir']);
Route::post('/enfermeira/salvar', [EnfermeiraController::class, 'salvar']);

Route::get('/recepcionista/listar', [RecepcionistaController::class, 'listar']);
Route::get('/recepcionista/novo', [RecepcionistaController::class, 'novo']);
Route::get('/recepcionista/editar/{id}', [RecepcionistaController::class, 'editar']);
Route::get('/recepcionista/excluir/{id}', [RecepcionistaController::class, 'excluir']);
Route::post('/recepcionista/salvar', [RecepcionistaController::class, 'salvar']);
