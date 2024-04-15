@extends('templeat/layout')
@push('title')
    contact
@endpush
@section('con')
<!-- Contact Section -->
<section id="contact" class="bg-light py-5">
  <div class="container">
    <h2>Contact Us</h2>
    <div class="row">
      <div class="col-md-6">
        <form>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name">
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email">
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" rows="3" placeholder="Enter your message"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="col-md-6">
        <h5>Address</h5>
        <p>123 Hospital Street<br>City, Country</p>
        <h5>Phone</h5>
        <p>(123) 456-7890</p>
        <h5>Email</h5>
        <p>info@hospital.com</p>
      </div>
    </div>
  </div>
</section>
@endsection