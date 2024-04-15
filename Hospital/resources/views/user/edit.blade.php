@extends('templeat/layout')
@section('con')

<h1>Update Post</h1>

<form method="post" action="{{ route('update', $data->id) }}">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="">name</label>
        <input type="text" name="title" value='{{$data->name}}' class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter Title">
    </div>
    <div class="form-group mt-3">
        <label for="exampleInputPassword1">mobile</label>
        <input type="text" name="subtitle" value='{{$data->mobile}}' class="form-control" id="" placeholder="Enter Subtitle">
    </div>
    <div class="form-group mt-3">
        <label for="exampleInputPassword1">disease</label>
        <input type="text" name="subtitle" value='{{$data->disease}}' class="form-control" id="" placeholder="Enter Subtitle">
    </div>
    <div class="form-group mt-3">
        <label for="exampleInputPassword1">medicines</label>
        <input type="text" name="subtitle" value='{{$data->medicines}}' class="form-control" id="" placeholder="Enter Subtitle">
    </div>
    
    
    <button type="submit" class="btn btn-primary mt-3">Update</button>
</form>
@endsection