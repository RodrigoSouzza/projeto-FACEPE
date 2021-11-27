@extends('layout') 
@section('conteudo')
<h1 id="cardapio">
    Confira nosso cardápio
</h1>
<table class="container">
    <tr>
        <th>
            Refeição 
        </th>
        <th>
            Dia da semana 
        </th>
        <th>
            Categoria
        </th>
        <th>
            Descrição
        </th>
    </tr>

@foreach($pratos as $prato)
    <tr>
        <td>{{$prato->nome}}</td>
        <td>{{$prato->diaSemana}}</td>
        <td>{{$prato->categoria}}</td>
        <td>{{$prato ->descricao}}</td>
    </tr>
@endforeach
</table>
@endsection
