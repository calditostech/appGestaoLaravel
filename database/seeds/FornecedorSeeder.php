<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'Fornecedor100.com.br';
        $fornecedor->uf = 'BA';
        $fornecedor->email = 'contato@fornecedor.com.br';
        $fornecedor->save();
        
        // metodo create atenção ao fillable na model
        Fornecedor::create([
            'nome' => 'Fornecedor 200',
            'site' => 'fornecedor200.com.br',
            'uf' => 'BA',
            'email' => 'contato@fornecedor.com.br'
        ]);
        
        //insert
        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor 200',
            'site' => 'fornecedor200.com.br',
            'uf' => 'BA',
            'email' => 'contato@fornecedor.com.br'
        ]);
    }
}
