<?php
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cadastrarProduto', [ProdutoController::class, 'index']);

Route::post('/cadastrarProduto', [ProdutoController::class, 'store'])->name('produto.store');

Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');

Route::get('/mostrar', [ProdutoController::class, 'show'])->name('mostrarProduto');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('produto', ProdutoController::class)->only(['index','store'])->middleware(['auth','verified']);


require __DIR__.'/auth.php';
