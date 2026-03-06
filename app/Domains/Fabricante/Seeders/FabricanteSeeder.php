<?php

namespace App\Domains\Fabricante\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Domains\Fabricante\Models\Fabricante;


class FabricanteSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds for Fabricante.
     *
     * @return void
     */
    public function run(): void
    {
        // Para usar factories, crie o arquivo de factory correspondente:
        // Fabricante::factory(10)->create();

        // Criar registros manualmente de exemplo:
        /*
        Fabricante::create([
            'nome' => 'Exemplo de Fabricante',
            // Adicione mais campos conforme necessário
        ]);
        */

        // Exemplo com relacionamentos:
        /*
        $relatedModel = RelatedModel::first();
        if ($relatedModel) {
            Fabricante::create([
                'nome' => 'Exemplo com relação',
                'related_model_id' => $relatedModel->id,
                // Outros campos...
            ]);
        }
        */
    }
}
