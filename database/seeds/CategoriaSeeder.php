<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Valores demos

        DB::table('categorias')->insert([
            [
                'nome' => 'Informatica',
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => date("Y-m-d H:m:s"),
            ],
        ]);
        DB::table('categorias')->insert([
            [
                'nome' => 'Carros',
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => date("Y-m-d H:m:s"),
            ],
        ]);
    }
}
