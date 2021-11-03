@extends('layout.app')

@section('title', 'New ComicBook')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('comics.store') }}" method="post">
                    @csrf
                    @method('POST')
                
                    <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title"  placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" placeholder="Enter description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="iamge">Image</label>
                        <input type="text" class="form-control" name="image" id="image"  placeholder="Enter Image URL">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" name="price" id="price"  placeholder="Enter Comibook's Price">
                    </div>
                    <div class="form-group">
                        <label for="series">Series</label>
                        <input type="text" class="form-control" name="series" id="series"  placeholder="Enter ComicBook's Series">
                    </div>
                    <div class="form-group">
                        <label for="title">Sale_Date</label>
                        <input type="date" class="form-control" name="sale_date" id="sale_date"  placeholder="Enter Sale Date">
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" name="type" id="type"  placeholder="Enter Type">
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection