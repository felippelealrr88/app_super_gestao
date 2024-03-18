<?php

use App\MotivoContato;
use Illuminate\Database\Seeder;

class MotivoContatoSeeder extends Seeder
{
    //Insere efetivamente os dados no banco
    public function run()
    {
        //Populando manualmente o banco sem usar o faker
        MotivoContato::create(['motivo_contato' => 'Dúvida']);
        MotivoContato::create(['motivo_contato' => 'Elogio']);
        MotivoContato::create(['motivo_contato' => 'Reclamação']);
        MotivoContato::create(['motivo_contato' => 'Sugestão']);
        MotivoContato::create(['motivo_contato' => 'Outros']);
    }
}
