<?php

use App\Domains\Fabricante\Controllers\FabricanteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Fabricante Domain Routes
|--------------------------------------------------------------------------
|
| Rotas para o domínio Fabricante
|
*/

Route::group([
    'middleware' => ['auth:api'],
    'as' => 'fabricante'
], function () {

    // Fabricante Routes
    Route::apiResource('fabricantes', FabricanteController::class);
    Route::post('fabricantes/search', [FabricanteController::class, 'search']);
    
});
