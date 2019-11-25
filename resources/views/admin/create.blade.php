@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2>Add Product to Inventory</h2>
        <form action="{{route('admin.create')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group">
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Enter name of Product">
                </div>
                <div class="form-group">
                        <input type="text" class="form-control" name="detail" placeholder="Enter name of Detail">
                 </div>
                 <div class="form-group">
                        <input type="number" class="form-control" name="price" placeholder="Enter name of Price">
                 </div>
                 <div class="form-group">
                        <input type="text" class="form-control" name="description" placeholder="Enter name of Description">
                 </div>
                 <button type="submit" class="btn btn-default">Add Product</button>
            </form>

        </div>

    </div>

</div>

@endsection