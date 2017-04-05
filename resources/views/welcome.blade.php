@extends('layouts.front')
@section('content')
<div class="mdl-grid center-div" align="center">
    <div class="mdl-cell mdl-cell--12-col title">
        <h1>Seja bem-vindo ao Brechó!</h1>
    </div>
    <div class="mdl-cell mdl-cell--6-col">
        <a href="{{route('vitrine')}}" class="cool-link"><b>Ver produtos</b></a>
    </div>
    <div class="mdl-cell mdl-cell--6-col">
        <a href="" class="cool-link"><b>Contato</b></a>
    </div>
</div>
@endsection