<?php

namespace App\Domains\Fabricante\Services;

use App\Domains\Fabricante\Models\Fabricante;
use App\Domains\Shared\Services\BaseService;

class FabricanteService extends BaseService
{
    public function __construct(private readonly Fabricante $fabricante)
    {
        $this->setModel($this->fabricante);
    }

    // 👉 methods
    
}
