<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UrunisimController;
use App\Http\Controllers\UrunekleController;
use App\Http\Controllers\GarsonController;


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
    return view('anasayfa');
});
Route::get('/sepet',function (){

return view('sepet');
})->name('sepet');
Route::get('/urunekle',function () {
    return view('urunekleme');
})->name('urunekle');
Route::get('/urunpost',[UrunisimController::class,'Sepetfonk'])->name('urunpost');
Route::get('/veriler', [UrunisimController::class, 'show'])->name('veriler_show');
Route::get('/ek',[UrunekleController::class, 'ekle'])->name('ek');
Route::get('/toplam',[UrunekleController::class,'toplam'])->name('toplam');
Route::get('/garson', [GarsonController::class, 'garsoncagir'])->name('garson');
Route::get('/cagir',[GarsonController::class,'cagirmasa'])->name('cagir');



Route::get('social/{provider}', 'SocialController@redirect');
Route::get('social/{provider}/callback', 'SocialController@callback');
