<?php

namespace App\Domains\Loja\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Domains\Shared\Models\BaseModel;


class Loja extends BaseModel
{
    use HasFactory;
    

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lojas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['razao_social', 'nome_fantasia', 'cnpj', 'tipo', 'tempo_entrega_min', 'tempo_entrega_max', 'valor_minimo', 'taxa_comissao', 'cep', 'logradouro', 'numero', 'complemento', 'bairro', 'cidade', 'estado', 'latitude', 'longitude', 'logotipo'];
    
}
