@extends('layouts.main')
@section('title', 'MeetUp App')
@section('content')
    <div id="search-container" class="col-md-12">
        <div class="container">
            <h1>Pequise um evento</h1>
            <form action="">
                <input type="text" id="search" name="search" class="form-control" placeholder="buscar...">
            </form>
        </div>
    </div>
<div class="container">
    <div id="events-container" class="col-md-12">
        <h2>Próximos Eventos</h2>
        <p class="subtitle">Veja os próximos eventos</p>
        <div id="cards-container" class="row">
            @foreach ($events as $event)
            <div class="card col-md-3">
                <img src="/img/evento01.jpg" alt="{{ $event->title }}">
                <div class="card-body">
                    <div class="card-date">01/01/2021</div>
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-participants "> x participantes </p>
                    <a href="#" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
                
            @endforeach
        </div>
    </div>

</div>

@endsection
