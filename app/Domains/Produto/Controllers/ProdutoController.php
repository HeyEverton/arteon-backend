<?php

namespace App\Domains\Produto\Controllers;

use App\Domains\Shared\Controller\BaseController;
use Illuminate\Http\Request;

use App\Domains\Produto\Services\ProdutoService;
use App\Domains\Produto\Requests\ProdutoRequest;

class ProdutoController extends BaseController
{
    public function __construct(private readonly ProdutoService $service)
    {
        $this->setACL('produto', [
            'list' => ['produto.index'],
            'create' => ['produto.store'],
            'edit'=> ['produto.update'],
            'delete' => ['produto.destroy']
        ]);
        parent::__construct();
        $this->setService($this->service);
        $this->setRequest('request', ProdutoRequest::class);
    }

    // 👉 methods
    public function listarFabricante(Request $request) {
		$options = $request->all();
		return $this->service->listarFabricante($options);
	}
}
