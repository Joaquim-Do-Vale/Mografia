<?php

use App\Http\Controllers\FreelancersController;
use App\Http\Controllers\NotificacoesController;
use App\Http\Controllers\ProjectoController;
use App\Http\Controllers\SolicitacoesController;
use App\Http\Controllers\TemasController;
use App\Http\Controllers\TitulosController;
use App\Http\Controllers\userController;
use App\Models\freelancers;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Route::resource('/info', userController::class);
Route::get('/dashboard/temas/index', [TemasController::class, 'index'])->name('temas.show');
Route::get('/dashboard/temas/create', [TemasController::class, 'create'])->name('temas.create');
Route::post('/dashboard/temas', [TemasController::class, 'store'])->name('temas.store');

Route::get('/dashboard/solicitacoes/index', [SolicitacoesController::class, 'index'])->name('solicitacao.sol-mostrar');
Route::get('/dashboard/solicitacoes/create', [SolicitacoesController::class, 'create'])->name('solicitacao.sol-criar');
Route::post('/dashboard/solicitacoes', [SolicitacoesController::class, 'store'])->name('solicitacoes.store');

Route::get('/dashboard/freelancer/index', [FreelancersController::class, 'index'])->name('freelancer.free-mostrar');
Route::get('/dashboard/freelancer/create', [FreelancersController::class, 'create'])->name('freelancer.free-criar');
Route::post('/dashboard/freelancer', [FreelancersController::class, 'store'])->name('freelancer.store');

Route::get('/dashboard/projetos/index', [ProjectoController::class, 'index'])->name('projetos.projetos-mostar');
Route::get('/dashboard/projetos/create', [ProjectoController::class, 'create'])->name('projetos.projetos-criar');
Route::post('/dashboard/projetos', [ProjectoController::class, 'store'])->name('projetos.store');

Route::get('/dashboard/titulos/index', [TitulosController::class, 'index'])->name('titulos.titulos-mostrar');
Route::get('/dashboard/titulos/create', [TitulosController::class, 'create'])->name('titulos.titulos-criar');
Route::post('/dashboard/titulos', [TitulosController::class, 'store'])->name('titulos.store');

Route::get('/dashboard/relatorio', [NotificacoesController::class, 'relatorio'])->name('relatorio.app');
Route::get('/dashboard/notificacoes/index', [NotificacoesController::class, 'index'])->name('notificacao.not-mostar');

