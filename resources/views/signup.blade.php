@extends('layouts.main')
@section('main-container')

<section id="appointment" data-stellar-background-ratio="3" style="padding-bottom:-10%; margin-top:-2%;" >
    <div class="container">
         <div class="row">

              <div class="col-md-6 col-sm-6">
                   <img src="{{ url('frontend/assets/img/appointment-image.jpg') }}" class="img-responsive" alt="">
              </div>

              <div class="col-md-6 col-sm-6">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                        <h2>Sign Up</h2>
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
                            <?php $statuscheck = session('status'); ?>
                            @if ($statuscheck == '0')
                                {{ 'Something went wrong' }}
                            @endif
                        </div>
                        {{-- <script>
                            window.onload = function()
                            {
                                alert("Account is created successfully ");
                                // window.location = "{{ url('/signup') }}";
                            }
                        </script> --}}
                    </div>

                    <form action="{{ url('/signup') }}" method="post" id="appointment-form" role="form">
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
                                    <label for="">password</label>
                                    <input type="password" class="form-control" name="password" placeholder="password">
                                    <span class="text-danger">
                                        @error('password')
                                            {{ $message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="col-md-12 col-sm-12">
                                    <label for="">Confirm password</label>
                                    <input type="password" class="form-control" name="confirm_password" placeholder="confirm password">
                                    <span class="text-danger">
                                        @error('confirm_password')
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
                                <div class="col-md-6 col-sm-6">
                                    <label for="date">Select Date of Brith</label>
                                    <input type="date" name="dob" class="form-control" value="{{old('dob')}}">
                                    <span class="text-danger">
                                        @error('dob')
                                            {{ $message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="col-md-6 col-sm-6" >
                                    <label for="">Gender</label><br>
                                     <select name="gender" id="department" class="form-control">
                                        <option value="M" name="gender" {{ old('gender') == "M" ? "selected" : "selected" }} >Male</option>
                                        <option value="F" name="gender" {{ old('gender') == "F" ? "selected" : "" }}>Female</option>
                                        <option value="O" name="gende"  {{ old('gender') == "O" ? "selected" : "" }}>Other</option>
                                      </select>


                                        {{-- <div class="form-gender">
                                        <input type="radio" name="gender" value="M"  {{ old('gender') == "M" ? "checked" : "checked" }} />MALE
                                        <input type="radio" name="gender" value="F" {{ old('gender') == "F" ? "checked" : "" }}/>Female
                                        <input type="radio" name="gender" value="O"  {{ old('gender') == "O" ? "checked" : "" }}/>other
                                         <br>
                                        <span class="text-danger">
                                            @error('gender')
                                                {{ $message}}
                                            @enderror
                                        </span>
                                        </div> --}}
                                </div>

                                <div class="col-md-12 col-sm-12">
                                    <label for="">Address</label>
                                    <textarea class="form-control" rows="5" name="address" placeholder="address">{{{ old('address') }}}</textarea>
                                    {{-- {{{ old('address') }}} --}}
                                    <span class="text-danger">
                                        @error('address')
                                            {{ $message}}
                                        @enderror
                                    </span>
                                    <button type="submit" class="form-control" id="cf-submit" name="signup">Sign Up</button>
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


@endsection

                            {{-- <div class="col-md-12 col-sm-12">
                                <label for="telephone">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
                            </div> --}}

                             {{-- <select class="form-control">
                                       <option>General Health</option>
                                       <option>Cardiology</option>
                                       <option>Dental</option>
                                       <option>Medical Research</option>
                                  </select> --}}

                                  {{-- <button type="submit" class="form-control" id="cf-submit" name="signup">Sign Up</button> --}}

                                  {{-- Schema::create('user', function (Blueprint $table) {
                                    $table->id('user_id');
                                    $table->string('user_email',100);
                                    $table->string('user_name',50);
                                    $table->integer('user_mobileNO')->length(15);
                                    $table->string('user_address',200);
                                    $table->enum('user_gender',["M","F","O"])->nullable();
                                    $table->date('user_dob')->nullable();
                                    $table->string('user_password');
                                    $table->boolean('user_status')->default(1);
                                    $table->timestamps();
                                }); --}}
