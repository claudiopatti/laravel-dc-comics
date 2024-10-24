@extends('layouts.app')

@section('page-title', $comic->title)

@section('main-content')
<h1>
    {{ $comic->title }}
</h1>

<div class="card">
    @if ($comic->thumb != null)
        <img class="card-img-top" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    @endif
    <div class="card-body">
        <ul>
            <li>
                la serie è: {{ $comic->series }}
            </li>
            <li>
                il tipo di fumetto è:  {{ $comic->type }}
            </li>
            <li>
                il prezzo è: ${{ $comic->price }}
            </li>
            <li>
                Data di uscita:  {{ $comic->sale_date }}
            </li>
            <li>
                Artisti sono: 
                <ul>
                    @foreach (json_decode($comic->artists, true) as $artist)
                    <li>
                        {{ $artist }}
                    </li>
                        
                    @endforeach
                </ul>
            </li>
            <li>
                Disegnatori sono: 
                <ul>
                    @foreach (json_decode($comic->writers, true) as $writer)
                    <li>
                        {{ $writer }}
                    </li>
                        
                    @endforeach
                </ul>
            </li>
        </ul>

        <p>
            {{ $comic->description }}
        </p>

    </div>
</div>

@endsection