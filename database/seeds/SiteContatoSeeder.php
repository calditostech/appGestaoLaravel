<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $contato = new SiteContato();
        $contato->nome = 'Sistema SG';
        $contato->telefone = '(11) 99998-8888';
        $contato->email = 'contato';
        $contato->motivo_contato = '1';
        $contato->mensagem = 'Bem vindo ao sistema super gestão';
        $contato->save();
        */

        factory(SiteContato::class, 100)->create();
    }
}
