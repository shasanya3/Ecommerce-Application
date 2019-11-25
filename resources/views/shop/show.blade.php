@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 product-image-shop">
            <img src="/images/{{$instanceofproduct->image}}" height="350px" width="400px">
            </div>
            <div class="col-md-6">
            <h1>{{$instanceofproduct->title}}</h1>
            <div class="product-subtitle">
                {{$instanceofproduct->detail}}
            </div>
            <p style="font-size:16px;">{{$instanceofproduct->description}}</p>
            <div class="product-price" >
                    {{$instanceofproduct->price}}
            </div>
        <form action="{{route('cart.store')}}" method="POST">
            @csrf
        <input type="hidden" name="id" value="{{$instanceofproduct->id}}">
        <input type="hidden" name="name" value="{{$instanceofproduct->name}}">
        <input type="hidden" name="price" value="{{$instanceofproduct->price}}">
        <button type="submit" class="btn btn-primary">Add To Cart</button>
            </form>
        </div>  

    </div>
@endsection