@extends('layouts.app')

@section('page-title', 'Crea Comics')

@section('main-content')
<h1>
  Crea Comics
</h1>

@if ($errors->any())
    <div class="alert alert-danger my-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('comics.store') }}" method="POST">

    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Inserisci il titolo del fumetto....." required maxlength="64" value="{{ old('title') }}">
        @error('title')
            <div class="alert alert-danger my-4">
                ERRORE TITLE: {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description<span class="text-danger">*</span></label>
        <textarea type="text" class="form-control" name="description" id="description" placeholder="Inserisci la descrizone del fumetto....." maxlength="4096" required>{{ old('description') }}"</textarea>
        @error('description')
            <div class="alert alert-danger my-4">
                ERRORE DESCRIZIONE: {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="thumb" class="form-label">Thumb</label>
        <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Inserisci la foto del fumetto....." value="{{ old('thumb') }}">
        @error('thumb')
            <div class="alert alert-danger my-4">
                ERRORE THUMB: {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price<span class="text-danger">*</span></label>
        <input type="number" class="form-control" name="price" id="price" placeholder="Inserisci il prezzo (con punto se ci sono dei centesimi) del fumetto....." required min="0" step=".01"  value="{{ old('price') }}">
        @error('price')
            <div class="alert alert-danger my-4">
                ERRORE PRICE: {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Series<span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="series" id="series" placeholder="Inserisci la serie del fumetto....." required maxlength="64" value="{{ old('series') }}">
        @error('series')
            <div class="alert alert-danger my-4">
                ERRORE SERIES: {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">Sale_date</label>
        <input type="date" class="form-control" name="sale_date" id="sale_date" placeholder="Inserisci la data di uscita del fumetto....." value="{{ old('sale_date') }}">
        @error('sale_date')
            <div class="alert alert-danger my-4">
                ERRORE SALE_DATE: {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Type<span class="text-danger">*</span></label>
        <select class="form-select" aria-label="Default select example" id="type" name="type" required>
            <option
                @if (!isset(old('type')) || old('type') == '')
                    selected
                @endif 
                disabled>inserisci il tipo del fumetto</option>
            <option
                @if (old('type') == 'comic book')
                    selected
                @endif  
                value="comic book">Comic book</option>
            <option 
                @if (old('type') == 'graphic novel')
                    selected
                @endif 
                value="graphic novel">Graphic novel</option>
          </select>
          @error('type')
            <div class="alert alert-danger my-4">
                ERRORE TYPE: {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="artists" class="form-label">Artists</label>
        <input type="text" class="form-control" name="artists" id="artists" aria-describedby="artists-help" placeholder="Inserisci Gli artisti del fumetto....." value="{{ old('artists') }}">
        <div id="artists-help" class="form-text">
            Inserisci i nomi degli artisti divisi da virgole
        </div>
        @error('artists')
            <div class="alert alert-danger my-4">
                ERRORE ARTISTS: {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="writers" class="form-label">Writers</label>
        <input type="text" class="form-control" name="writers" id="writers" aria-describedby="writers-help" placeholder="Inserisci gli scrittori del fumetto....." value="{{ old('writers') }}">
        <div id="writers-help" class="form-text">
            Inserisci i nomi degli scrittori divisi da virgole
        </div>
        @error('writers')
            <div class="alert alert-danger my-4">
                ERRORE WRITERS: {{ $message }}
            </div>
        @enderror
    </div>

    <div>
        <button type="submit" class="btn btn-danger w-75">
            AGGIUNGI
        </button>
    </div>

</form>
@endsection