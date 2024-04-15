@extends('template/layout')
@section('con')
<form method="post" action="{{route('update',$data->id)}}">
    @csrf
    @method('put') 
    <div class="form-group">
        <label for="">name</label>
        <input type="text" name="title" value='{{$data->name}}' class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter Title">
    </div>
    <div class="form-group">
        <label for="">name</label>
        <input type="text" name="title" value='{{$data->city}}' class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter Title">
    </div>
    <button type="submit" class="btn btn-primary mt-3">Update</button>
</form>
@endsection