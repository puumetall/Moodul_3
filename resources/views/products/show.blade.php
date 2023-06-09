@extends('layouts.app')
@section('content')
    <div class="container">
        <table class="table">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{$product->id}}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{$product->name}}</td>
                </tr>
                <tr>
                    <th>Year</th>
                    <td>{{$product->year}}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{$product->description}}</td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td><img src="{{$product->image}}" height="300"></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
