@extends('layouts.app')
@section('content')
    <div class="container text-center">
        <div class="card">
            <img src="{{$product->image}}" class="card-img-top" alt="...">
            <div class="card-header">
                {{$product->name}}
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Year</b> {{$product->year}}</li>
                <li class="list-group-item"><b>Name</b>{{$product->name}}</li>
            </ul>

        </div>

    </div>
@endsection
