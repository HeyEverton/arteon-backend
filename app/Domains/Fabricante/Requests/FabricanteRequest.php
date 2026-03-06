<?php

namespace App\Domains\Fabricante\Requests;

use App\Domains\Shared\Requests\BaseFormRequest;

class FabricanteRequest extends BaseFormRequest
{
    public function base(): array
    {
        return [
            'razao_social' => ['required', 'string', 'max:80'],
            'nome_fantasia' => ['required', 'string', 'max:80'],
            'cnpj' => ['required', 'string', 'max:18', 'unique:fabricantes,cnpj,' . $this->route('fabricante')],
            'email' => ['nullable', 'string', 'max:100', 'unique:fabricantes,email,' . $this->route('fabricante')],
            'telefone' => ['nullable', 'string', 'max:20'],
            'ativo' => ['nullable', 'boolean'],
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
