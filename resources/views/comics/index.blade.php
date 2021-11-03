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
                        <div class="buttons">
                            <a href="{{ route('comics.show', $comic['id']) }}" class="btn btn-primary">Details</a>
                        </div>
                        <div class="buttons">
                            <a href="{{ route('comics.edit', $comic['id']) }}" class="btn btn-warning">Edit</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection