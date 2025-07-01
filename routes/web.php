<?php
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\User\ProductoController;
use App\Http\Middleware\UserMiddleware;
use App\Http\Controllers\User\CarritoController;
use App\Http\Controllers\User\CompraController;
use App\Http\Controllers\User\VentaController;
use App\Http\Controllers\ContactoController;
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/contactanos',function (){
    return view('contactanos');
});
Route::get('/productos',function (){
    return view('productos');
})->name('productos');
Route::get('/nosotros',function (){
    return view('about-us');
});
Route::middleware(['auth', AdminMiddleware::class])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('productos', ProductController::class);
    Route::resource('admin/productos', ProductController::class)->names('admin.productos');
    Route::get('/usuarios', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('usuarios.index');
    Route::get('/ventas', [App\Http\Controllers\Admin\VentaController::class, 'index'])->name('ventas.index');
});
Route::get('/catalogo', [ProductoController::class, 'catalogo'])->name('catalogo');
Route::get('/producto/{id}', [ProductoController::class, 'detalle'])->name('producto');

Route::middleware(['auth',UserMiddleware::class])->group(function(){
    Route::post('/carrito/agregar/{id}', [App\Http\Controllers\User\CarritoController::class, 'agregar'])->name('carrito.agregar');
    Route::post('/carrito/eliminar/{id}', [App\Http\Controllers\User\CarritoController::class, 'eliminar'])->name('carrito.eliminar');
    Route::get('/carrito', [App\Http\Controllers\User\CarritoController::class, 'ver'])->name('carrito.ver');
    Route::post('/comprar', [App\Http\Controllers\User\CompraController::class, 'realizarCompra'])->name('comprar');
});
Route::post('/contactar', [ContactoController::class, 'enviar'])->name('contacto.enviar');
require __DIR__.'/auth.php';