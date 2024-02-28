<?php

use Illuminate\Database\Seeder;
use \App\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //instruções para criação de objetos

        //Instanciando o Objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'fornecedor100.com.be';
        $fornecedor->uf = 'RR';
        $fornecedor->email = 'fornecedor100@fornecedor.com.br';
        $fornecedor->save();

        //Usando o método create() herdado de Model (preencher $fillable)
        Fornecedor::create([
            'nome'=>'Fornecedor 200',
            'site'=>'fornecedor200.com.br',
            'uf'=>'PA',
            'email'=>'fornecedor200@fornecedor.com.br'
        ]);

        //Usando método Insert (não passa pelo tratamento do eloquent)
        DB::table('fornecedores')->insert([
            'nome'=>'Fornecedor 300',
            'site'=>'fornecedor300.com.br',
            'uf'=>'RS',
            'email'=>'fornecedor300@fornecedor.com.br'
        ]);

    }
}
