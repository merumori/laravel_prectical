@extends('templeat/layout')
@section('con')
Patient's Name:{{$data->name}}<br>
Patient's Mobile Number:{{$data->mobile}}<br>
Patient's Disease:{{$data->disease}}<br>
Patient's Medicines:{{$data->medicines}}<br>
@endsection