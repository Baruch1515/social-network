<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
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



require __DIR__.'/auth.php';


Route::group(['middleware' => 'auth'], function () {
    Route::resource('dashboard', InicioController::class);
    Route::get('/dashboard', [InicioController::class, 'index'])->name('dashboard');
    Route::get('perfil/{user}', [InicioController::class, 'perfil'])->name('perfil');
    Route::get('vista-publicacion/{publicacion}', [InicioController::class, 'vista'])->name('vista-publicacion');

    

});
