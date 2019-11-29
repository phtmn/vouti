<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Enum\PapelEnum;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'              => 'Administrador',
            'email'             => 'admin@admin.com',
            'password'          => bcrypt('123456'),
            'papel_id'          => PapelEnum::SERBEN,
            'nome_partido'      => 'Partido dos Trabalhadores',
            'sigla'             => 'PT',
            'num_legenda'       => '13',
            'nome_presidente'   => 'Fernando Haddad',
            'site'              => 'https://pt.org.br'
        ]);

        // User::create([
        //     'name'              => 'Candidato',
        //     'email'             => 'candidato@admin.com',
        //     'password'          => bcrypt('123456'),
        //     'papel_id'          => PapelEnum::EMPRESA,
        //     'nome_partido'      => 'Partido dos Trabalhadores',
        //     'sigla'             => 'PT',
        //     'num_legenda'       => '13',
        //     'nome_presidente'   => 'Fernando Haddad',
        //     'site'              => 'https://pt.org.br'
        // ]);

        User::create([
            'name'              => 'Cabo Eleitoral',
            'email'             => 'cabo@admin.com',
            'password'          => bcrypt('123456'),
            'papel_id'          => PapelEnum::CABO_ELEITORAL,
            'nome_partido'      => 'Partido dos Trabalhadores',
            'sigla'             => 'PT',
            'num_legenda'       => '13',
            'nome_presidente'   => 'Fernando Haddad',
            'site'              => 'https://pt.org.br'
        ]);
                
    }
}
