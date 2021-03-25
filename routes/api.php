<?php

use App\AlerjInformacao;
use App\Http\Controllers\Api as ApiAlias;

Route::get('/alerj/all', [ApiAlias::class, 'all'])->name('api.alerj.all');
Route::get('/alerj/categoria/{id?}', [ApiAlias::class, 'categoria'])->name('api.alerj.categoria');
Route::get('/alerj/informacao/{id?}', [ApiAlias::class, 'informacao'])->name(
    'api.alerj.informacao'
);

Route::get('/alerj/informacao/{id?}', [ApiAlias::class, 'informacao'])->name(
    'api.alerj.informacao'
);
Route::get('/alerj/informacao/{id?}/arquivos', [ApiAlias::class, 'informacaoArquivos'])->name(
    'api.alerj.arquivos'
);

Route::get('/alerj/arquivo/{id?}', [ApiAlias::class, 'arquivo'])->name('api.alerj.arquivo');
Route::get('/alerj/conteudo/{id}', [ApiAlias::class, 'conteudo'])->name('api.alerj.conteudo');

Route::get('/alerj/conteudo/{id}/arquivos', [ApiAlias::class, 'conteudoArquivos'])->name(
    'api.alerj.conteudo.arquivos'
);
Route::get('/alerj/protocolo/{year}/{number}', [ApiAlias::class, 'protocolo'])->name(
    'api.alerj.protocolo'
);

Route::get('/alerj/test', function () {
    dd(\App\Models\AlerjInformacao::where('idInformacao', 71));
});
