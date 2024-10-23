@extends('layouts.app')

@section('page-title', 'INDEX COMICS')

@section('main-content')
<h1>
    INDEX COMICS
</h1>

<h2>
    tutti i Comics
</h2>

<div class="mb-3">
    <a href="{{ route('comics.create') }}" class="btn btn-success w-50">
        + Aggiungi fumetto
    </a>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">Descizione</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Serie</th>
        <th scope="col">Data di Uscita</th>
        <th scope="col">Tipo</th>
        <th scope="col">Artisti</th>
        <th scope="col">Scrittori</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($comics as $comic)
        <tr>
          <th scope="row">{{$comic['id']}}</th>
          <td>{{$comic['title']}}</td>
          <td>{{$comic['description']}}</td>
          <td>${{$comic['price']}}</td>
          <td>{{$comic['series']}}</td>
          <td>{{$comic['sale_date']}}</td>
          <td>{{$comic['type']}}</td>
          <td>{{$comic['artists']}}</td>
          <td>{{$comic['writers']}}</td>
          <td>
            <a href="{{ route('comics.show', ['comic' => $comic->id])}}" class="btn btn-primary">
                Guarda il Fumetto
            </a>
            <a href="{{ route('comics.edit', ['comic' => $comic->id])}}" class="btn btn-success">
              Modifica il Fumetto
            </a>
            <form 
              onsubmit="return confirm('sei proprio sicuro di voler eliminare {{ $comic->title }}')"
              action="{{ route('comics.destroy', ['comic' => $comic->id])}}" 
              method="POST" 
              class="d-inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    ELIMINA
                </button>
            </form>
          </td>
        </tr>
            
        @endforeach
    </tbody>
</table>
@endsection