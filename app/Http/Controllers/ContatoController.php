<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request) {

        $motivo_contatos = MotivoContato::all();

        return view('site.contato', ['titulo' => 'Contato (teste)', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request) {

        //realizar a validação dos dados do formulário recebidos no request
        $regras = [
            'nome' => 'required|min:3|max:40|unique:site_contatos',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000'
        ];

        $feedback = [
            'nome.min' => 'O campo nome precisa ter no minimo 3 caracteres',
            'nome.max' => 'O campo nome precisa ter no maximo 40 caracteres',
            'nome.unique' => 'O nome informado ja esta em uso',

            'email.email' => 'O email informado não é valido',

            'mensagem.max' => 'A mensagem deve ter no maximo 2000 caracteres',

            'telefone.required' => 'O campo telefone precisa ser preenchido',

            'required' => 'O campo deve ser preenchido'
        ];
         
        $request->validate($regras, $feedback);
    
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
