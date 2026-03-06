<?php

namespace App\Domains\Promocao\Services;

use App\Domains\Promocao\Models\Promocao;
use App\Domains\Shared\Services\BaseService;

class PromocaoService extends BaseService
{
    public function __construct(private readonly Promocao $promocao)
    {
        $this->setModel($this->promocao);
    }

    // 👉 methods
    public function listarProduto($options) {
		$data = \App\Domains\Produto\Models\Produto::query()->paginate($options['per_page'] ?? 15);
		return $data->items();
	}
}
