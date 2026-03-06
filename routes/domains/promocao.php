<?php

use App\Domains\Promocao\Controllers\PromocaoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Promocao Domain Routes
|--------------------------------------------------------------------------
|
| Rotas para o domínio Promocao
|
*/

Route::group([
    'middleware' => ['auth:api'],
    'as' => 'promocao'
], function () {

    // Promocao Routes
    Route::apiResource('promocoes', PromocaoController::class);
    Route::post('promocoes/search', [PromocaoController::class, 'search']);
    
    Route::get('promocoes/listar/produto', [PromocaoController::class, 'listarProduto']);
});
