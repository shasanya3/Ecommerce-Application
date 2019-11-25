@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2>item in Shopping Cart</h2>
            @foreach(Cart::content() as $item)
            <div class="row" style="border-top:1px solid #919191; padding:14px 0">
                <div class="col-md-3">
                <img src="/images/{{$item->model->image}}" height="75px" width="120px">
                </div>
                <div class="col-md-6">
                <h6>{{$item->model->name}}</h6>
                <h6>{{$item->model->detail}}</h6>
                </div>
                <div class="col-md-3">
                <form action="{{route('cart.destroy',$item->rowId)}}" method="POST">
                    @csrf
                    {{method_field('DELETE')}}
                    <button type="submit" style="margin-left:-14px;" class="btn btn-destroy">Remove</button>
                
                </form>
                <p>{{$item->model->price}}</p>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row" style="margin-left:116px;  padding-top:1%;" >
            <div class="col-md-8 offset-md-2 " >
                <div class="row">
                    <div class="col-md-4">
                        <p>
                            Shipping is free because we’re awesome like that. Also because that’s additional stuff I don’t feel like figuring out :).
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h4>Subtotal: </h4>
                        <h5>Tax: </h5>
                        <h3>Total: </h3>
                    </div>
                    <div class="col-md-4">
                    <h4>{{Cart::subtotal()}}</h4>
                        <h5>{{Cart::tax()}}</h5>
                        <h3>{{Cart::total()}}</h3>
                    </div>

                </div>

            </div>


        </div>
    </div>

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="row">
                <div class="col-md-12">
                <a class="btn btn-primary" href="{{route('shop.index')}}">Continue Shopping</a>
                <a class="btn btn-success" href="{{route('checkout.index')}}">Checkout Order</a>

                </div>

            </div>
        </div>
        
    </div>
</div>
@endsection