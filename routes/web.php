<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\RelatorioVendaController;
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

Route::get('produto_create', [ProdutoController::class, 'create'])->name('produtos.create');
Route::get('produtos_index', [ProdutoController::class, 'index'])->name('produtos.index');
Route::get('produtos_edit/{id}', [ProdutoController::class, 'edit'])->name('produtos.edit');
Route::post('produtos_store', [ProdutoController::class, 'store'])->name('produtos.store');
Route::get('produtos_show/{id}', [ProdutoController::class, 'show'])->name('produtos.show');
Route::put('produtos_update/{id}',[ProdutoController::class, 'update'])->name('produtos.update');
Route::delete('produtos_destroy/{id}', [ProdutoController::class, 'destroy'])->name('produtos.destroy');


Route::get('relatorio_vendas_index', [RelatorioVendaController::class, 'index'])->name('relatorio.index');
Route::get('relatorio_vendas_create', [RelatorioVendaController::class, 'create'])->name('relatorio.create');
Route::get('relatorio_vendas_show/{id}', [RelatorioVendaController::class, 'show'])->name('relatorio.show');
Route::get('relatorio_vendas_edit/{id}', [RelatorioVendaController::class, 'edit'])->name('relatorio.edit');
