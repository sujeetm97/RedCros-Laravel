@extends('layouts.main')
@section('main-container')

<section id="appointment" data-stellar-background-ratio="3" style="padding-bottom:-10%;">
    <div class="container">
         <div class="row">
              <div class="col-md-6 col-sm-6">
                   <img src="{{ url('frontend/assets/img/appointment-image.jpg') }}" class="img-responsive" alt="">
              </div>
              <?php $statuscheck = session('status'); ?>
                    @if ($statuscheck == '1')
                    <script>
                        window.onload=function()
                        {
                            alert("account created successfuly please login with your email and password");
                            // window.location="index.php";
                        }
                    </script>
                    @endif
              <div class="col-md-6 col-sm-6">
                    <form action="{{ url('/login') }}"  method="post" id="appointment-form" role="form">
                        @csrf
                        <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                             <h2>Login</h2>
                             <div style="color:red;">
                                @if (session()->has('login_fail'))
                                    {{ session()->get('login_fail') }}
                                @endif
                            </div>
                        </div>

                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                             <div class="col-md-12 col-sm-12" style="padding-top: 20px;">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Your Email" value="{{old('email') }}">
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message}}
                                    @enderror
                                </span>

                                <label for="">password</label>
                                <input type="password" class="form-control" name="password" placeholder="password">
                                <span class="text-danger">
                                    @error('password')
                                        {{ $message}}
                                    @enderror
                                </span>

                                <button type="submit" class="form-control" id="cf-submit" name="login">Login</button>
                             </div>
                        </div>
                    </form>
              </div>

         </div>
    </div>
</section>


@endsection

