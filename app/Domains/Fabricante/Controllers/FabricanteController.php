<?php

namespace App\Domains\Fabricante\Controllers;

use App\Domains\Shared\Controller\BaseController;
use Illuminate\Http\Request;

use App\Domains\Fabricante\Services\FabricanteService;
use App\Domains\Fabricante\Requests\FabricanteRequest;

class FabricanteController extends BaseController
{
    public function __construct(private readonly FabricanteService $service)
    {
        $this->setACL('fabricante', [
            'list' => ['fabricante.index'],
            'create' => ['fabricante.store'],
            'edit'=> ['fabricante.update'],
            'delete' => ['fabricante.destroy']
        ]);
        parent::__construct();
        $this->setService($this->service);
        $this->setRequest('request', FabricanteRequest::class);
    }

    // 👉 methods
    
}
