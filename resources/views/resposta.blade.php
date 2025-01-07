@extends('layout')

@section('content')
<div class="texto">
    <h2>emprestimo de  </h2>
</div>

<div class="row">
    <div class="col-md-3">Mēs</div>
    <div class="col-md-6">Valor inicial</div>
    <div class="col-md-3">Valor atualizado</div>
</div>

@foreach ($dados as $item)

<div class="row">
        <div class="col-md-3"> {{$item["mes"]}} </div>
        <div class="col-md-6"> R$ {{$item["capitalInicial"]}} </div>
        <div class="col-md-3"> R$ {{$item["capitalAtualizado"]}} </div>
</div>
@endforeach


<button onclick="window.location.href='/';" type="button"
class="btn btn-lg btn-primary btn-block botao">Voltar</button>
@endsection