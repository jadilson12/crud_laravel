<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjetosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projetos')->insert([
            [
                'nome' => 'Sistema  de alocação de recurso',
                'estimativa_horas' => 200,
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => date("Y-m-d H:m:s"),
            ],
        ]);
        DB::table('projetos')->insert([
            [
                'nome' => 'Sistema de loja',
                'estimativa_horas' => 2050,
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => date("Y-m-d H:m:s"),
            ],
        ]);
        DB::table('projetos')->insert([
            [
                'nome' => 'Sistema  de vendas',
                'estimativa_horas' => 2700,
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => date("Y-m-d H:m:s"),
            ],
        ]);
    }
}
