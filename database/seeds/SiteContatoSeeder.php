<?php

use App\SiteContato;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Instanciando o Objeto
        $contato = new SiteContato();
        $contato->nome = 'Felippe';
        $contato->telefone = '(95)99156-2526';
        $contato->email = 'felippelealrr@bol.com';
        $contato->motivo_contato = 1;
        $contato->mensagem = 'O sistema aceita cobranças via Pix?';
        $contato->save();

        //Usando o create() do Model ($fillable configurado)
        SiteContato::create([
            'nome'=>'Rosa',
            'telefone'=>'(95)99125-0050',
            'email'=>'romariaribeiro@bol.com',
            'motivo_contato'=>3,
            'mensagem'=>'Não consigo alterar minha senha!'

        ]);

        

    }
}
