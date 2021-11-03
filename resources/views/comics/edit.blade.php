@extends('layout.app')
@section('title', 'Edit ComicBook')
    
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('comics.update', $dettaglio_comicbook['id']) }}" method="post">
                    @csrf
                    @method('PUT')
                
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{ $dettaglio_comicbook['title'] }}" placeholder="Enter Title">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" value="{{ $dettaglio_comicbook['description'] }}" placeholder="Enter description"></textarea>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="text" class="form-control" name="image" id="image" value="{{ $dettaglio_comicbook['image'] }}"  placeholder="Enter Image URL">
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" name="price" id="price" value="{{ $dettaglio_comicbook['price'] }}"  placeholder="Enter Comibook's Price">
                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="series">Series</label>
                        <input type="text" class="form-control" name="series" id="series" value="{{ $dettaglio_comicbook['series'] }}"  placeholder="Enter ComicBook's Series">
                        @error('series')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title">Sale_Date</label>
                        <input type="date" class="form-control" name="sale_date" id="sale_date" value="{{ $dettaglio_comicbook['sale_Date'] }}"  placeholder="Enter Sale Date">
                        @error('sale_Date')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select name="type" id="type" class="form-group">
                            <option value="seleziona">--> Seleziona <--</option>
                            <option value="comicbook">--> ComicBook <--</option>
                            <option value="artwork">--> ArtWork <--</option>
                        </select>
                        @error('type')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection