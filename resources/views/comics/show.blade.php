@extends('layout.app')

@section('title', 'Details')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="comics">
                    <div class="comic_image">
                        <img src="{{ $dettaglio_comicbook['image'] }}" alt="cover">
                    </div>
                    <div class="comic_text">
                        <h3>{{ $dettaglio_comicbook['title'] }}</h3>
                        <p>{{ $dettaglio_comicbook['series'] }}</p>
                        <p>{{ $dettaglio_comicbook['price'] . ' ' . '€'}} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection