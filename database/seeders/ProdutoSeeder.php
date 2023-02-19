<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('produtos')->insert([
            'nome' => 'empire',
            'preco' => '156.9'
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Latitude Stamina',
            'preco' => '139.9'
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Latitude Adventure',
            'preco' => '139.9'
        ]);
    }


}
