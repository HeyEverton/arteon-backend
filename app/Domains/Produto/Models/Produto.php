<?php

namespace App\Domains\Produto\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Domains\Shared\Models\BaseModel;
use App\Domains\Fabricante\Models\Fabricante;
use App\Domains\Promocao\Models\Promocao;
class Produto extends BaseModel
{
    use HasFactory;
    

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'produtos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nome', 'descricao', 'marca', 'imagem', 'ean', 'sku', 'fabricante_id'];
    

    /**
     * Get the Fabricante that owns this record.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fabricante(): BelongsTo
    {
        return $this->belongsTo(Fabricante::class);
    }
    /**
     * Get the promocoes for this record.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function promocoes(): HasMany
    {
        return $this->hasMany(Promocao::class);
    }
}