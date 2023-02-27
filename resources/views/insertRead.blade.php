
@extends('welcome')
@section('content')
<center>
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
Add Record
</button>
</center>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Record</h5>
        <button type="button" class="btn-outline-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="insertData" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Enter Product Name</span>
  <input type="text" class="form-control" name="PName" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>
     <div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Enter Product Price</span>
  <input type="text" class="form-control" name="PPrice" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <!-- <span class="input-group-text" id="inputGroup-sizing-sm">Vehicle Model</span> -->
  <input type="file" class="form-control" name="PImage" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>

  <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary " data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="conainer">
<table class="table">
    <thead>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Product Image</th>
        <th>Update</th>
        <th>Delete</th>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>
            <form action="updatedelete" method="get">
            <td> <input type="hidden" name="id" value="{{$item['Id']}}" > {{$item['Id']}}</td>
            <td><input type="hidden" name="name" value="{{$item['PName']}}" >{{$item['PName']}}</td>
            <td><input type="hidden" name="price" value="{{$item['PPrice']}}" >{{$item['PPrice']}}</td>
            <td> <img src="images/{{$item['PImage']}}" width="100px" height="100px" alt="img"></td>
            <td><input type="submit" class="btn btn-outline-warning rounded-pill" name="update" value="Update"></td>
            <td><input type="submit" class="btn btn-outline-danger rounded-pill" value="delete"></td>
            </form>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
