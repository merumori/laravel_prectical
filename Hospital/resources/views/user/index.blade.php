@extends('templeat.layout')

@push('title')
    Home
@endpush
@section('con')
<h1>Home Page</h1>
    <table class='table table-striped table-bordered table-hover table-sm'>
        <thead>
            <th>ID</th>
            <th>Patient's Name</th>
            <th>Patient's Mobile Number</th>
            <th>Patient's Disease</th>
            <th>Patient's Medicines</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>View</th>
        </thead>
    @foreach($myblogs as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->mobile}}</td>
            <td>{{$data->disease}}</td>
            <td>{{$data->medicines}}</td>
            <td><a href="{{ route('show', $data->id) }}" class="btn btn-info">View</a></td>
            <td>
                
                <form action="{{ route('edit', $data->id) }}" method="post">
                    @csrf
                    <input type="submit" value="{{ $data->id }} - Edit" class="btn btn-warning">
                </form>
            </td>
            <td>
                <form action="{{ route('destroy', $data->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="{{ $data->id }} - Delete" class="btn btn-danger">
                </form>
            </td>
        </tr>
    @endforeach
    </table>
@endsection
