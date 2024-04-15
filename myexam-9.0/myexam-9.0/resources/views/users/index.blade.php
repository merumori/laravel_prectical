@extends('template/layout')
@section('con')
<h1>hello student</h1>
<table class='table table-striped table-bordered table-hover table-sm'>
        <thead>
            <th>ID</th>
            <th> Name</th>
            <th>City</th>
        </thead>
@foreach($students as $data)

<tr>
    <td>{{$data->id}}</td>
    <td>{{$data->name}}</td>
<td>{{$data->city}}</td>
<td><td><a href="{{ route('show', $data->id) }}" class="btn btn-info">View</a></td></td>
<td>
    
        <form  method="post" action="{{route('edit',$data->id)}}">
            @csrf
            <input type="submit" value="{{ $data->id }} - Edit" class="btn btn-warning">
        </form>
</td>
<td>
<form method="post" action="{{route('destroy',$data->id) }}">
    @csrf
    @method('delete')
    <input type="submit" value="{{ $data->id }} - Delete" class="btn btn-danger">
</form>
</td>
</tr>
@endforeach
</table>
@endsection