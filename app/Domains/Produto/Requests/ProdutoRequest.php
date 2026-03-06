<?php

namespace App\Domains\Produto\Requests;

use App\Domains\Shared\Requests\BaseFormRequest;

class ProdutoRequest extends BaseFormRequest
{
    public function base(): array
    {
        return [
            'nome' => ['required', 'string', 'max:80'],
            'descricao' => ['nullable', 'string'],
            'marca' => ['nullable', 'string', 'max:50'],
            'imagem' => ['nullable', 'string', 'max:200'],
            'ean' => ['nullable', 'string', 'max:20'],
            'sku' => ['nullable', 'string', 'max:50'],
            'fabricante_id' => ['required', 'ulid', 'exists:fabricantes,id'],
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
