<?php

namespace App\Domains\Fabricante\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Domains\Shared\Models\BaseModel;
use App\Domains\Produto\Models\Produto;

class Fabricante extends BaseModel
{
    use HasFactory;
    

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fabricantes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['razao_social', 'nome_fantasia', 'cnpj', 'email', 'telefone', 'ativo'];
    

    /**
     * Get the produtos for this record.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function produtos(): HasMany
    {
        return $this->hasMany(Produto::class);
    }
}