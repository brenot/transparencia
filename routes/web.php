<?php

use App\Http\Controllers\Cache as CacheController;
use App\Http\Controllers\Home as HomeController;
use App\Http\Controllers\Protocol as ProtocolController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/section/{id}', [HomeController::class, 'data'])->name('section');
Route::get('/section/report/{id}', [HomeController::class, 'item'])->name('report');

Route::get('/cache/clear/{key?}', [CacheController::class, 'clear'])->name('cache.clear');

Route::get('/protocolo', [ProtocolController::class, 'index'])->name('protocol');
Route::post('/protocolo', [ProtocolController::class, 'show'])->name('protocol.show');

//Route::get('/categoria', function () {
//    $data = DB::connection('alerj')
//        ->table('tb_informacao')
//        ->where('idInformacao', 71)
//        ->get();
//
//    dd($data);
//});
