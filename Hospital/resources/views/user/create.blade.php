@extends('templeat/layout')
@push('title')
    Add Post
@endpush
@section('con')
<!-- Patient Information Form -->
<form method="post" action="{{route('store')}}">
    @csrf
  <div class="form-group">
    <label for="patientName">Patient's Name</label>
    <input type="text" class="form-control" id="patientName" name="name" placeholder="Enter patient's name">
  </div>
  <div class="form-group">
    <label for="patientMobile">Patient's Mobile Number</label>
    <input type="tel" class="form-control" id="patientMobile" name="mobile" placeholder="Enter patient's mobile number">
  </div>
  <div class="form-group">
    <label for="patientDisease">Patient's Disease</label>
    <input type="text" class="form-control" id="patientDisease" name="disease" placeholder="Enter patient's disease">
  </div>
  <div class="form-group">
    <label for="patientMedicines">Patient's Medicines</label>
    <textarea class="form-control" id="patientMedicines" rows="3" name="medicines" placeholder="Enter patient's medicines"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection