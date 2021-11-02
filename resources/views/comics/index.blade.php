@extends('layout.app')

@section('title', 'Comics')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-wrap">
                @foreach ($comics as $comic)
                    <div class="comics">
                        <div class="comic_image">
                            <img src="{{ $comic['image'] }}" alt="cover">
                        </div>
                        <div class="comic_text">
                            <h3>{{ $comic['title'] }}</h3>
                            <p>{{ $comic['series'] }}</p>
                            <p>{{ $comic['price'] . ' ' . '€'}} </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection