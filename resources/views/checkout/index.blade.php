@extends('layouts.app')
@section('content')
<div class="container">
    
        @if (session()->has('success_message'))
            <div class="spacer"></div>
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="spacer"></div>
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{!! $error !!}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    <h1>Checkout</h1>
    <div class="row">
        <div class="col-md-8">
        <form action="{{route('checkout.store')}}" method="POST" id="payment-form">
                        {{ csrf_field() }}
                        <h2>Billing Details</h2>
    
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            
                                <input type="email" class="form-control" id="email" name="email" value="" readonly>
                            
                                <input type="email" class="form-control" id="email" name="email" value="" >
                            
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" >
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" >
                        </div>
    
                        <div class="half-form">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" >
                            </div>
                            <div class="form-group">
                                <label for="province">Province</label>
                                <input type="text" class="form-control" id="province" name="province" value="{{ old('province') }}" >
                            </div>
                        </div> <!-- end half-form -->
    
                        <div class="half-form">
                            <div class="form-group">
                                <label for="postalcode">Postal Code</label>
                                <input type="text" class="form-control" id="postalcode" name="postalcode" value="{{ old('postalcode') }}" >
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" >
                            </div>
                        </div> <!-- end half-form -->
    
                        <div class="spacer"></div>
    
                        <h2>Payment Details</h2>
    
                        <div class="form-group">
                            <label for="name_on_card">Name on Card</label>
                            <input type="text" class="form-control" id="name_on_card" name="name_on_card" value="">
                        </div>
    
                        <div class="form-group">
                            <label for="card-element">
                              Credit or debit card
                            </label>
                            <div id="card-element">
                              <!-- a Stripe Element will be inserted here. -->
                            </div>
    
                            <!-- Used to display form errors -->
                            <div id="card-errors" role="alert"></div>
                        </div>
                        <div class="spacer"></div>
    
                        <button type="submit" id="complete-order" class="button-primary full-width">Complete Order</button>
    
    
                    </form>

        </div>
        <div class="col-md-4">
            <h3>Your Order</h3>
            <div class="row" style="border-top:1px solid;">
                @foreach(Cart::content() as $item)
                <div class="col-md-4">
                    <img src="/images/{{$item->model->image}}" height="100px" width="100px">
                </div>
                <div class="col-md-8">
                <p>{{$item->model->detail}}</p>
                </div>
                @endforeach
            </div>
            <h4>subtotal: {{Cart::subtotal()}}</h4>
            <h4>Tax(13%): {{Cart::tax()}}</h4>
            <h4><b>Total: {{Cart::total()}}</b> </h4>

        </div>
    </div>


</div>

@endsection