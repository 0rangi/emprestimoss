@extends('layout')
@section('content')


<form class="form-signin" action="{{route('calcular')}}" method="POST">
    @csrf
    <div class="texto">
    <h1 class="h3 mb-3 font-weight-normal">Calcular juros ao mês</h1>
</div>

        

<label for="nome" class="sr-only">Nome: </label>
        <input type="text" id="name" class="form-control" name="name"
            placeholder="FULANO DE TOWN" required autofocus>

<label for="capital" class="sr-only">Valor do empréstimo: R$</label>
        <input type="number" id="capital" class="form-control" name="capital"
            placeholder="100.00" min="10" required autofocus>
        <label for="taxa" class="sr-only">Taxa de juros ao mês: %</label>
        <input type="number" id="number" class="form-control" name="taxa"
            placeholder="10" min="1" required>
        <label for="periodo" class="sr-only">Quantidade de parcelas: </label>
        <input type="number" id="number" class="form-control" name="periodo"
            placeholder="3" min="1" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Calcular</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2025</p>
</form>
@endsection