<?php

namespace App\Domains\Loja\Requests;

use App\Domains\Shared\Requests\BaseFormRequest;

class LojaRequest extends BaseFormRequest
{
    public function base(): array
    {
        return [
            'razao_social' => ['required', 'string', 'max:80'],
            'nome_fantasia' => ['required', 'string', 'max:80'],
            'cnpj' => ['required', 'string', 'max:18'],
            'tipo' => ['required', 'in:distribuidora,cervejaria'],
            'tempo_entrega_min' => ['nullable', 'integer'],
            'tempo_entrega_max' => ['nullable', 'integer'],
            'valor_minimo' => ['nullable', 'numeric'],
            'taxa_comissao' => ['nullable', 'numeric'],
            'cep' => ['nullable', 'string', 'max:9'],
            'logradouro' => ['nullable', 'string', 'max:100'],
            'numero' => ['nullable', 'string', 'max:10'],
            'complemento' => ['nullable', 'string', 'max:30'],
            'bairro' => ['nullable', 'string', 'max:50'],
            'cidade' => ['nullable', 'string', 'max:50'],
            'estado' => ['nullable', 'string', 'max:2'],
            'latitude' => ['nullable', 'numeric'],
            'longitude' => ['nullable', 'numeric'],
            'logotipo' => ['nullable', 'string', 'max:200'],
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
