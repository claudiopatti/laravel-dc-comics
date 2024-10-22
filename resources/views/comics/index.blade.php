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
            <a href="{{ route('comics.show', ['comic' => $comic->id])}}" class="btn btn-danger">
                Guarda il Fumetto
            </a>
          </td>
        </tr>
            
        @endforeach
    </tbody>
</table>
@endsection