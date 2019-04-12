<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // valores demos

        DB::table('produtos')->insert([
            [
                'nome' => 'Notebook',
                'descricao' => 'Completo com HD 500 GB',
                'quantidade' => 3,
                'preco' => 2.5,
//                'categoria_id' => 1,
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => date("Y-m-d H:m:s"),
            ],
        ]);

        DB::table('produtos')->insert([
            [
                'nome' => 'Teclado',
                'descricao' => 'Para nootebook',
                'quantidade' => 1,
                'preco' => 4.5,
//                'categoria_id' => 1,
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => date("Y-m-d H:m:s"),
            ],
        ]);
    }
}
