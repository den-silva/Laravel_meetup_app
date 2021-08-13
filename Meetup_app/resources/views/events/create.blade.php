@extends('layouts.main')
@section('title', 'Criar Evento')
@section('content')
    
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie seu evento</h1>
        <form action="/events" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Evento</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="form-group">
                <label for="title">Cidade</label>
                <input type="text" class="form-control" id="city" name="city">
            </div>

            <div class="form-group">
                <label for="title">Evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Descrição</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Descreva aqui seu evento"></textarea>
            </div>
            <br>
            <input type="submit" class="btn btn-primary" value="Criar">
        </form>

    </div>
@endsection