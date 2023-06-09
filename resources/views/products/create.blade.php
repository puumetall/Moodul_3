@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
                @error('name')
                    <div class="invalid-feedback" style="display: block">
                        @foreach($errors->all() as $error)
                            {{$error}}
                        @endforeach
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                @error('description')
                <div class="invalid-feedback" style="display: block">
                    @foreach($errors->all() as $error)
                        {{$error}}
                    @endforeach
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Year</label>
                <input type="text" class="form-control" id="year" name="year">
            </div>
            <div class="mb-3">
                <label for="list_number" class="form-label">List Number</label>
                <input type="text" class="form-control" id="list_number" name="list_number">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
                @error('image')
                <div class="invalid-feedback" style="display: block">
                    @foreach($errors->all() as $error)
                        {{$error}}
                    @endforeach
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
@endsection
