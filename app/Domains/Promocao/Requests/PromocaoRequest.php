<?php

namespace App\Domains\Promocao\Requests;

use App\Domains\Shared\Requests\BaseFormRequest;

class PromocaoRequest extends BaseFormRequest
{
    public function base(): array
    {
        return [
            'titulo' => ['required', 'string', 'max:80'],
            'descricao' => ['nullable', 'string'],
            'preco_promocional' => ['nullable', 'numeric'],
            'data_inicio' => ['required', 'date'],
            'data_fim' => ['required', 'date'],
            'ativo' => ['nullable', 'boolean'],
            'produto_id' => ['required', 'ulid', 'exists:produtos,id'],
        ];
    }

    public function view(): array
    {
        return [];
    }

    public function store(): array
    {
        return [];
    }

    public function update(): array
    {
        return [];
    }

    public function destroy(): array
    {
        return [];
    }
}
