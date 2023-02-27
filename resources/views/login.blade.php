
@extends('layout')
@section('content')

<h1>User Login</h1>
<form action="user" method="POST">
    @csrf
<input type="text" placeholder="Enter Name" name="user" >
<input type="password" placeholder="Enter Password" name="pswd" >
<button type="submit">Submit</button>

</form> <br><br>
@endsection
