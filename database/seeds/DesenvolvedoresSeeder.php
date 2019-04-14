<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesenvolvedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Valores demos

        DB::table('desenvolvedores')->insert([
            [
                'nome' => 'Pedro',
                'cargo' => 'Analista junior',
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => date("Y-m-d H:m:s"),
            ],
        ]);
        DB::table('desenvolvedores')->insert([
            [
                'nome' => 'Mateus',
                'cargo' => 'Analista',
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => date("Y-m-d H:m:s"),
            ],
        ]);
        DB::table('desenvolvedores')->insert([
            [
                'nome' => 'Marcos',
                'cargo' => 'Gerente',
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => date("Y-m-d H:m:s"),
            ],
        ]);

    }
}
