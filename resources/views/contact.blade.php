@extends('layouts.main')
@section('main-container')

    <!-- ======= Contact Section ======= -->
    <section  class="contact" style="margin-top:50px;">
        @if (session()->has('contact_status'))
            <script>
                window.onload=function()
                {
                    alert("we will contact you later");
                }
            </script>
        @endif

      <div class="container">

        <div class="section-title">
          <h2 style="color:red">Contact Us</h2>
          </div>
      </div>



      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">

              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Rajkot-36002</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>Redcrossbloodbank@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+91 9712386221</p>
              </div>

            </div>
          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            @if (count($errors) > 0)
            <div class = "alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action=" {{ url('/contact') }}" method="post">
                    @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>

                        <div class="text-center"><button type="submit" class="btn btn-primary">Send Message</button></div>
                    {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                </form>
          </div>

          {{-- <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="{{ url('/contact') }}" method="post" role="form" class="php-email-form">
              <div class="row">
                    <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
              </div>

              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>

              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>

              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div> --}}

        </div>

      </div>
    </section><!-- End Contact Section -->
@endsection
