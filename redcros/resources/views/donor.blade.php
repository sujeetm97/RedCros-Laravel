@extends('layouts.main')
@section('main-container')
{{-- code --}}
<section id="appointment" data-stellar-background-ratio="3" style="padding-bottom:-10%; margin-top:-2%;" >
    <div class="container">
         <div class="row">

              <div class="col-md-6 col-sm-6">
                   <img src="{{ asset('frontend/assets/img/appointment-image.jpg') }}" class="img-responsive" alt="">
              </div>

              <div class="col-md-6 col-sm-6">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                        <h2>Become Donor</h2>
                        @if (count($errors) > 0)
                        <div class = "alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div style="color:red;">
                            {{-- @if (session()->has('status'))
                            {{ session()->get('status') }}
                            @endif --}}
                        </div>
                        {{-- <script>
                            window.onload = function()
                            {
                                alert("Account is created successfully ");
                                // window.location = "{{ url('/signup') }}";
                            }
                        </script> --}}
                    </div>

                    <form action="{{ url('/donor') }}" method="post" id="appointment-form" role="form">
                        @csrf
                         <div class="wow fadeInUp" data-wow-delay="0.8s">
                                <div class="col-md-12 col-sm-12">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" value="{{old('email')}}">
                                    <span class="text-danger">
                                        @error('email')
                                            {{ $message}}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Full Name" value="{{old('name')}}">
                                    <span class="text-danger">
                                        @error('name')
                                            {{ $message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="col-md-12 col-sm-12">
                                    <label for="telephone">Phone Number</label>
                                    <input type="tel" class="form-control" name="mobileNO" placeholder="Phone" value="{{old('mobileNO')}}">
                                    <span class="text-danger">
                                        @error('mobileNO')
                                            {{ $message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="col-md-12 col-sm-12" >
                                    <label for="">Blood Group</label><br>
                                     <select name="bloodgroup" id="department" class="form-control">
                                        @foreach($bloodgroup as $key => $value)
                                        <option value="{{$value}}">{{$value}}</option>
                                        @endforeach
                                      </select>
                                </div>

                                <div class="col-md-6 col-sm-6" >
                                    <label for="">Gender</label><br>
                                     <select name="gender" id="department" class="form-control">
                                        <option value="M" name="gender" {{ old('gender') == "M" ? "selected" : "selected" }} >Male</option>
                                        <option value="F" name="gender" {{ old('gender') == "F" ? "selected" : "" }}>Female</option>
                                        <option value="O" name="gende"  {{ old('gender') == "O" ? "selected" : "" }}>Other</option>
                                      </select>
                                </div>

                                <div class="col-md-6 col-sm-6" >
                                    <label for="">Age</label><br>
                                     <select name="age" id="department" class="form-control">
                                        @foreach($age as $key => $value)
                                        <option value="{{$value}}">{{$value}}</option>
                                        @endforeach
                                      </select>
                                </div>

                                <div class="col-md-6 col-sm-6" >
                                    <label for="">state</label><br>
                                     <select name="state" id="department" class="form-control">
                                        @foreach($state as $key => $value)
                                        <option value="{{$value}}">{{$value}}</option>
                                        @endforeach
                                      </select>
                                </div>

                                <div class="col-md-6 col-sm-6" >
                                    <label for="">City</label><br>
                                     <select name="city" id="department" class="form-control">
                                        @foreach($city as $key => $value)
                                        <option value="{{$value}}">{{$value}}</option>
                                        @endforeach
                                      </select>
                                </div>

                                <div class="col-md-12 col-sm-12">
                                    <br>
                                    <button type="submit" class="form-control" id="cf-submit" name="signup">Become donor</button>
                                </div>
                         </div>
                    </form>
                    {{-- <form action=" {{ url('/signup') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form> --}}
              </div>
         </div>
    </div>
</section>
{{-- end code --}}
@endsection
