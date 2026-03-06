<?php

use App\Domains\Produto\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Produto Domain Routes
|--------------------------------------------------------------------------
|
| Rotas para o domínio Produto
|
*/

Route::group([
    'middleware' => ['auth:api'],
    'as' => 'produto'
], function () {

    // Produto Routes
    Route::apiResource('produtos', ProdutoController::class);
    Route::post('produtos/search', [ProdutoController::class, 'search']);
    
    Route::get('produtos/listar/fabricante', [ProdutoController::class, 'listarFabricante']);
});
