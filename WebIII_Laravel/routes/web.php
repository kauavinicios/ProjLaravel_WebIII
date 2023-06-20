<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

use App\Http\Controllers\UpaController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\EspecialidadeController;
use App\Http\Controllers\EnfermeiraController;
use App\Http\Controllers\RecepcionistaController;
use App\Http\Controllers\AssistenteSocialController;
use App\Http\Controllers\AuxiliarLimpezaController;

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

Route::get('/cad', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/upa/listar', [UpaController::class, 'listar']);
Route::get('/medico/listar', [MedicoController::class, 'listar']);
Route::get('/especialidade/listar', [EspecialidadeController::class, 'listar']);
Route::get('/enfermeira/listar', [EnfermeiraController::class, 'listar']);
Route::get('/recepcionista/listar', [RecepcionistaController::class, 'listar']);
Route::get('/assistenteSocial/listar', [AssistenteSocialController::class, 'listar']);
Route::get('/auxiliarLimpeza/listar', [AuxiliarLimpezaController::class, 'listar']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/upa/novo', [UpaController::class, 'novo']);
    Route::get('/upa/editar/{id}', [UpaController::class, 'editar']);
    Route::get('/upa/excluir/{id}', [UpaController::class, 'excluir']);
    Route::post('/upa/salvar', [UpaController::class, 'salvar']);

    Route::get('/medico/novo', [MedicoController::class, 'novo']);
    Route::get('/medico/editar/{id}', [MedicoController::class, 'editar']);
    Route::get('/medico/excluir/{id}', [MedicoController::class, 'excluir']);
    Route::post('/medico/salvar', [MedicoController::class, 'salvar']);

    Route::get('/especialidade/novo', [EspecialidadeController::class, 'novo']);
    Route::get('/especialidade/editar/{id}', [EspecialidadeController::class, 'editar']);
    Route::get('/especialidade/excluir/{id}', [EspecialidadeController::class, 'excluir']);
    Route::post('/especialidade/salvar', [EspecialidadeController::class, 'salvar']);

    Route::get('/enfermeira/novo', [EnfermeiraController::class, 'novo']);
    Route::get('/enfermeira/editar/{id}', [EnfermeiraController::class, 'editar']);
    Route::get('/enfermeira/excluir/{id}', [EnfermeiraController::class, 'excluir']);
    Route::post('/enfermeira/salvar', [EnfermeiraController::class, 'salvar']);

    Route::get('/recepcionista/novo', [RecepcionistaController::class, 'novo']);
    Route::get('/recepcionista/editar/{id}', [RecepcionistaController::class, 'editar']);
    Route::get('/recepcionista/excluir/{id}', [RecepcionistaController::class, 'excluir']);
    Route::post('/recepcionista/salvar', [RecepcionistaController::class, 'salvar']);

    Route::get('/assistenteSocial/novo', [AssistenteSocialController::class, 'novo']);
    Route::get('/assistenteSocial/editar/{id}', [AssistenteSocialController::class, 'editar']);
    Route::get('/assistenteSocial/excluir/{id}', [AssistenteSocialController::class, 'excluir']);
    Route::post('/assistenteSocial/salvar', [AssistenteSocialController::class, 'salvar']);

    Route::get('/auxiliarLimpeza/novo', [AuxiliarLimpezaController::class, 'novo']);
    Route::get('/auxiliarLimpeza/editar/{id}', [AuxiliarLimpezaController::class, 'editar']);
    Route::get('/auxiliarLimpeza/excluir/{id}', [AuxiliarLimpezaController::class, 'excluir']);
    Route::post('/auxiliarLimpeza/salvar', [AuxiliarLimpezaController::class, 'salvar']);
});

require __DIR__.'/auth.php';
