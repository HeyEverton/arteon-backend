<?php

namespace Database\Seeders;

use App\Domains\ACL\Seeders\RolesPermissionSeeder;
use App\Domains\Auth\Seeders\AuthDomainDatabaseSeeder;
use Illuminate\Database\Seeder;
use App\Domains\Fabricante\Seeders\FabricanteSeeder;
use App\Domains\Loja\Seeders\LojaSeeder;
use App\Domains\Produto\Seeders\ProdutoSeeder;
use App\Domains\Promocao\Seeders\PromocaoSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(RolesPermissionSeeder::class);
        $this->call(AuthDomainDatabaseSeeder::class);
    }
}
