<h2>Fornecedor</h2>

@php
     
@endphp

@isset($fornecedores)
    
     @forelse($fornecedores as $indice => $fornecedor)     
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] }}
        <br>
        Telefone: {{ $fornecedor['ddd'] }}
        <hr>
    @empty
      Não existe fornecedores
    @endforelse
@endisset

