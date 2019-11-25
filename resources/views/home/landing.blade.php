@extends('layouts.app')
@section('content')
<section class="landingheader" style="padding-top:5%; padding-bottom:5%;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="list-item" style="margin-top:50px;">
                <h1>Ecommerce Store</h1>
                <p>Search Through different products. We have a Inventory of Different products that you can Search 
                    to match your choice. Choose from our various Items in our Inventory and start your purchase today
                    for your family to enjoy.
                </p>
            <a href="{{route('shop.index')}}" class="btn btn-primary">Shop now</a>
             </div>
            </div>
            <div class="col-md-6">
                <img src="mac.jpg" height="250px" width="250px" style="margin-left:100px">

            </div>

        </div>

    </div>


</section>

<section id="contact" style="background-image: url(image3.png)">
        <div class="container">
          <div class="row">
            <div class="col-md-5 col-sm-5">
              <form>
                <div class="form-group">
                  <label>Name: </label>
                  <input class="form-control" type="text" name="" value="" placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label>Email: </label>
                  <input class="form-control" type="text" name="" value="" placeholder="Enter Email">
                </div>
                <div class="form-group">
                  <label>Message: </label>
                  <textarea class="form-control" name="" value="" placeholder="Enter Message"></textarea>
                </div>
                <button class="btn btn-default">Submit</button>
              </form>
            </div>
            <div class="col-md-7 col-sm-7">
  
            </div>
          </div>
        </div>
      </section>

      <section id="testimonial">
            <div class="container">
              <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud"</p>
              <p class="customer">- John Doe</p>
            </div>
          </section>

          <section id="info2">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6 col-sm-6">
                      <div class="info-left">
                        <h2>Info Block One</h2>
                        <p>Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                      <div class="info-right">
                        <h2>Info Block Two</h2>
                        <p>Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
          

{{-- <section style="background-color: white;padding-top:10%;padding-bottom:10%; ">
        <div class="container">
             <center> <h4 style="padding-bottom:30px;">Latest Items in Our Inventory</h4></center>  

            <div class="row" style="margin-left:50px;">
                    @foreach($products as $product)
                    <div class="col-md-4">
                    <a href="{{route('shop.show',$product->name)}}"> <h6>{{$product->name}}</h6> </a>                        
                    <img src="/images/{{$product->image}}" height="100px" width="100px">
                    <h6> {{$product->price}}</h6>
                </div>
                @endforeach

            </div>
    
        </div>
    
    </section> --}}
@endsection