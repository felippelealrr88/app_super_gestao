<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SiteContato;
use Faker\Generator as Faker;

//Criando o preenchimento dos campos
$factory->define(SiteContato::class, function (Faker $faker) {
    return [
        'nome'=> $faker->name(),
        'telefone'=> $faker->e164PhoneNumber,
        'email'=>$faker->unique()->freeEmail,
        'motivo_contato'=> $faker->numberBetween(1, 3),
        'mensagem'=>$faker->text(200)
    ];
});
