@extends('template/layout')
@section('con')
<table class='table table-striped table-bordered table-hover table-sm'>
        <thead>
            <th>ID</th>
            <th> Name</th>
            <th>City</th>
        </thead>
        <tr>
    <td>{{$data->id}}</td>
    <td>{{$data->name}}</td>
<td>{{$data->city}}</td>
        </tr>
</table>
@endsection