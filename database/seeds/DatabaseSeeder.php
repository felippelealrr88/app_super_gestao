<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Realiza as chamadas dos métodos
        
        // $this->call(UsersTableSeeder::class);
        //$this->call(FornecedorSeeder::class);
        //$this->call(SiteContatoSeeder::class);
        $this->call(MotivoContatoSeeder::class);

    }
}
