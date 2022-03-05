@extends('layouts.main')

@section('title', 'Home')

@section('content')
<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Pesquisar Evento">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Pŕoximos Eventos</h2>
    <p>Veja os eventos dos próximos dias</p>
    @if (count($events) === 0 && $search)
        <p>Não foi possível encontrar eventos disponíveis para: {{ $search }}</p>
        <a class="px-2" href="/">Voltar</a>
    @elseif (count($events) === 0)
        <p>Ainda não há eventos disponíveis</p>
    @endif
    <div id="cards-container" class="row">
        @foreach ($events as $event)
            <div class="card col-md-3">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                <div class="card-body">
                    <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-participants">X participantes</p>
                    <a href="/eventos/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
