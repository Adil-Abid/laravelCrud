@extends('welcome')
@section('content')

<div class="col-md-4 m-auto border">
        <h2 class="text-center text-danger">Update</h2>
        <form action="updateData" method="get">

        <div class="mb-2">
                <label>Product Name</label>
                <input type="text" name="name" value="{{$pname}}" class="form-control">
            </div>
            <div class="mb-2">
                <label>Product Price</label>
                <input type="text" name="price" value="{{$pprice}}"  class="form-control">
            </div>
            <!-- <div class="mb-2">
                <label>Product Image</label>
                <input type="text" name="" class="form-control">
            </div> -->
            <input type="hidden" name="id" value="{{$pid}}" >
            <button class="btn btn-outline-danger" type="submit">Update</button>
        </form>
</div>


@endsection
