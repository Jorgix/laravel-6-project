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

use App\Http\Controllers\EventController;
use App\Http\Controllers\ProductController;

//Route::middleware([])->group(function (){
//
//    Route::prefix('admin')->group(function(){
//
//    });
//});

Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');


Route::group([
    'middleware' => ['auth'],
    'prefix' => 'admin'
],
    function (){
    Route::get('/dashboard', [EventController::class, 'index'])->name('dashboard');
    Route::get('/financeiro', [EventController::class, 'index'])->name('financeiro');
    Route::get('/produtos',[EventController::class, 'index'])->name('produtos');
    Route::get('/', [EventController::class, 'index'] )->name('Início');
});


//Route::get('/login', function (){
//    return 'Página de Login';
//})->name('login');
//
//Route::get('/admin/dashboard', function (){
//   return 'Admin Dashboard';
//})->middleware('auth');
//
//Route::get('/admin/financeiro', function(){
//   return 'Admin Financeiro';
//})->middleware('auth');
//
//Route::get('/admin/produtos', function (){
//    return 'Admin Produtos';
//})->middleware('auth');


Route::get('/login', function (){
    return 'página de login';
})->name('login');


Route::get('nome-url', function (){
   return redirect()->route('url.name');
});

Route::view('/redirect3', 'welcome');

Route::redirect('/redirect1', 'redirect2');

//Route::get('/redirect1', function (){
//    return redirect('/redirect2');
//});

Route::get('/redirect2', function (){
    return 'Página 2 redirecionada';
})->name('url.name');

Route::get('/produtos/{idProduct?}', function ($idProduct = ''){
     return "O id do produto é: {$idProduct}";
});

Route::get('/categorias/{flag}/posts', function ($flag){
    return "Posts da categoria da URL é: {$flag}";
});

Route::get('/categorias/{flag}', function ($flag){
    return "A categoria da URL é: {$flag} ";
});

Route::get('/contato', function (){
    return 'contato';
});

Route::any('/qualquer', function(){
    return 'Qualquer verbo';
});

Route::get('/servicos', function(){
    return 'serviços';
});

Route::get('/', function () {
    return view('welcome');
});
