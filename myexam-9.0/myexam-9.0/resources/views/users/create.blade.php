@extends('template/layout')
@section('con')
<form method="post" action="{{ route('store')}}">
  <div class="form-group">
    @csrf
    <label for="exampleInputEmail1">name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Enter name">
   
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">city</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="city" aria-describedby="emailHelp" placeholder="Enter city">
    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection