@extends('layouts.main')

@section('title', 'Home')

@section('content')
<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" id="search" name="serch" class="form-control" placeholder="Pesquisar Evento">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Pŕoximos Eventos</h2>
    <p>Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach ($events as $event)
            <div class="card col-md-3">
                <img src="/img/event-banner.jpg" alt="">
                <div class="card-body">
                    <p class="card-date">10/09/2022</p>
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-participants">X participantes</p>
                    <a href="" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
