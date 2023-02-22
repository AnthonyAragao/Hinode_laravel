<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelatorioVendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('relatorio_vendas')->insert([
            'nome' => 'Amoz',
            'valor_pago' => '70.9',
            'data_compra' => '02/02/2023',
            'descricao' => 'Falta pagar a segunda parcela',
            'produto_id' => 1
        ]);

        DB::table('relatorio_vendas')->insert([
            'nome' => 'Tercio',
            'valor_pago' => '100',
            'data_compra' => '03/02/2023',
            'descricao' => 'Falta pagar a segunda parcela',
            'produto_id' => 2
        ]);

        DB::table('relatorio_vendas')->insert([
            'nome' => 'Rodrigo',
            'valor_pago' => '55.9',
            'data_compra' => '05/02/2023',
            'descricao' => 'Falta pagar a segunda parcela',
            'produto_id' => 3
        ]);
    }
}
