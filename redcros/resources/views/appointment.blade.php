@extends('layouts.main')
@section('main-container')

   <!-- ======= Appointment Section ======= -->
   <section id="appointment" class="appointment section-bg" style="margin-top:70px;">
      <div class="container">

        <div class="section-title">
          <h3>Make an Appointment</h3>
          <div>

        <form action="{{ url('/Appointment') }}" method="HEAD" role="form">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="date" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <input type="time" name="date" class="form-control datepicker" id="time" placeholder="Appointment time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">

              <div class="validate"></div>
            </div>


            <div class="col-md-4 form-group mt-3">
              <select name="department" id="department" class="form-control">
                <option value="">Select Department</option>
                <option value="Department 1">Department 1</option>
                <option value="Department 2">Department 2</option>
                <option value="Department 3">Department 3</option>
              </select>
              <div class="validate"></div>
            </div>


            <div class="col-md-4 form-group mt-3">
              <select name="doctor" id="doctor" class="form-control">
                <option value="">Select Doctor</option>
                <option value="Doctor 1">Doctor 1</option>
                <option value="Doctor 2">Doctor 2</option>
                <option value="Doctor 3">Doctor 3</option>
              </select>
              <div class="validate"></div>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
            <div class="validate"></div>
          </div>
          {{-- <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div> --}}
          {{-- <div> {{$abc}}</div> --}}
          <a class="btn btn-success  bounceInUp" href="{{ url('/Appointment') }}"> Book Appointment </a>
          <!--<div class="text-center" style="margin-top:20px;"><button type="submit">Make an Appointment</button></div>-->
          <br><br>
        </form>

      </div>
    </section><!-- End Appointment Section -->
@endsection
