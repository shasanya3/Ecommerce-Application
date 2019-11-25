@extends('layouts.app')
@section('content')
<div class="container">
    <div class="header">
        <h1>Featured Products</h1>
        <h3 style="text-align:right">Unsort</h3>
        <span style="text-align:right">Unsort</span>
        <span style="text-align:right">Unsort</span>

    </div>
    <div class="row">
           @foreach($products as $product)
                <div class="col-md-4">
                    <div class="product" style="text-align:center">
                    <a href="{{route('shop.show', $product->name)}}"> <img src="/images/{{$product->image}}" height="160px" width="200px" alt=""></a>
                    <a href="{{route('shop.show', $product->name)}}"> <h6>{{$product->name}}</h6> </a>
                    <div class="price">{{$product->price}}</div>
                    </div>

                </div>
           @endforeach

    </div>

</div>

@endsection