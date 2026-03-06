<?php

namespace App\Domains\Produto\Services;

use App\Domains\Produto\Models\Produto;
use App\Domains\Shared\Services\BaseService;

class ProdutoService extends BaseService
{
    public function __construct(private readonly Produto $produto)
    {
        $this->setModel($this->produto);
    }

    // 👉 methods
    public function listarFabricante($options) {
		$data = \App\Domains\Fabricante\Models\Fabricante::query()->paginate($options['per_page'] ?? 15);
		return $data->items();
	}
}
