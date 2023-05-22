<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UpaController;

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

Route::get('/medico/listar', [UpaController::class, 'listar']);
Route::get('/medico/novo', [UpaController::class, 'novo']);
Route::get('/medico/editar/{id}', [UpaController::class, 'editar']);
Route::get('/medico/excluir/{id}', [UpaController::class, 'excluir']);
Route::post('/medico/salvar', [UpaController::class, 'salvar']);
