@extends('layouts.app')

@section('page-title', 'Crea Comics')

@section('main-content')
<h1>
  Crea Comics
</h1>

<form action="{{ route('comics.store') }}" method="POST">

    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Inserisci il titolo del fumetto....." required maxlength="64">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description<span class="text-danger">*</span></label>
        <textarea type="text" class="form-control" name="description" id="description" placeholder="Inserisci la descrizone del fumetto....." maxlength="4096" required></textarea>
    </div>
    <div class="mb-3">
        <label for="thumb" class="form-label">Thumb</label>
        <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Inserisci la foto del fumetto.....">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price<span class="text-danger">*</span></label>
        <input type="number" class="form-control" name="price" id="price" placeholder="Inserisci il prezzo (con punto se ci sono dei centesimi) del fumetto....." required min="0" step=".01">
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Series<span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="series" id="series" placeholder="Inserisci la serie del fumetto....." required maxlength="64">
    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">Sale_date</label>
        <input type="date" class="form-control" name="sale_date" id="sale_date" placeholder="Inserisci la data di uscita del fumetto.....">
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Type<span class="text-danger">*</span></label>
        <select class="form-select" aria-label="Default select example" id="type" name="type" required>
            <option selected disabled>inserisci il tipo del fumetto</option>
            <option value="comic book">Comic book</option>
            <option value="graphic novel">Graphic novel</option>
          </select>
    </div>
    <div class="mb-3">
        <label for="artists" class="form-label">Artists</label>
        <input type="text" class="form-control" name="artists" id="artists" aria-describedby="artists-help" placeholder="Inserisci Gli artisti del fumetto.....">
        <div id="artists-help" class="form-text">
            Inserisci i nomi degli artisti divisi da virgole
        </div>
    </div>
    <div class="mb-3">
        <label for="writers" class="form-label">Writers</label>
        <input type="text" class="form-control" name="writers" id="writers" aria-describedby="writers-help" placeholder="Inserisci gli scrittori del fumetto.....">
        <div id="writers-help" class="form-text">
            Inserisci i nomi degli scrittori divisi da virgole
        </div>
    </div>

    <div>
        <button type="submit" class="btn btn-danger w-75">
            AGGIUNGI
        </button>
    </div>

</form>
@endsection