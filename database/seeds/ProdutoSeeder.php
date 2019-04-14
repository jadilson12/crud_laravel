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
                'nome' => 'Teclado',
                'estoque' => 4,
                'preco' => 1,
                'categoria_id' => 1,
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => date("Y-m-d H:m:s"),
            ],
        ]);

        DB::table('produtos')->insert([
            [
                'nome' => 'Mause',
                'estoque' => 4,
                'preco' => 4,
                'categoria_id' => 2,
                'created_at' => date("Y-m-d H:m:s"),
                'updated_at' => date("Y-m-d H:m:s"),
            ],
        ]);
    }
}
