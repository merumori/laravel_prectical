@extends('templeat/layout')
@push('title')
    about
@endpush
@section('con')

<!-- About Section -->
<section id="about" class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>About Us</h2>
        <p>Welcome to [Hospital Name], your trusted healthcare provider. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec urna a tellus laoreet commodo. Phasellus at nisl at sem varius condimentum. Ut volutpat sapien sit amet nisi tincidunt lobortis.</p>
        <p>We are committed to providing high-quality healthcare services to our community. Our dedicated team of doctors, nurses, and staff work tirelessly to ensure the well-being of our patients.</p>
      </div>
      <div class="col-md-6">
        <img src="about_image.jpg" alt="About Image" class="img-fluid">
      </div>
    </div>
  </div>
</section>

@endsection
