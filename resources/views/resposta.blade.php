@extends('layout')

@section('content')
<div class="texto">
    <h2>Calcular Empréstimos </h2>
</div>

<div class="row">
    <div class="col-md-3">Parcela</div>
    <div class="col-md-6">Total a pagar</div>
    <div class="col-md-3">Parcela do mês</div>
</div>

@foreach ($dados as $item)

<div class="row">
        <div class="col-md-3"> {{$item["mes"]}} </div>
        <div class="col-md-6"> R$ {{$item["totalAPagar"]}} </div>
        <div class="col-md-3"> R$ {{$item["parcela]}} </div>
</div>
@endforeach

<div class="texto">
    <h3> Foram pagos R${{$item["totalPago"]}}</h3>
</div>

<button onclick="window.location.href='/';" type="button"
class="btn btn-lg btn-primary btn-block botao">Voltar</button>
@endsection