@extends('layouts.main')
@section('main-container')

<section class="content">

 <div class="card card-solid">
      <div class="card-body pb-0">
            <div class="row">



                <div class="col-5 col-sm-5 col-md-12 d-flex align-items-stretch flex-column">

                    <form action=" {{ url('/updateprofile') }}" method="post">
                        @csrf

                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">
                                Update Profile
                            </div>

                            @if (count($errors) > 0)
                            <div class = "alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">

                                        <div class="col-md-6 col-sm-6">
                                            <label for="name">Name</label>

                                            @foreach ($user as $users)
                                                <input type="text" class="form-control" name="name" value="{{ $users['user_name'] }}" >
                                            {{-- {{ dd($users['user_name'])}} --}}
                                            @endforeach


                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <label for="email">Email</label>
                                            @foreach ($user as $users)
                                                <input type="email" class="form-control" name="email" value="{{ $users['user_email'] }}">
                                            @endforeach

                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <label for="telephone">Phone Number</label>
                                            @foreach ($user as $users )
                                                <input type="tel" class="form-control" name="mobileNO" value="{{ $users['user_mobileNO'] }}" >
                                            @endforeach

                                        </div>

                                        <div class="col-md-6 col-sm-6" >
                                            <label for="">Gender</label><br>
                                             <select name="gender" id="department" class="form-control">
                                                <option value="M" name="gender">Male</option>
                                                <option value="F" name="gender">Female</option>
                                                <option value="O" name="gende">Other</option>
                                              </select>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <label for="date">Date of Brith</label>
                                            @foreach ($user as $users )
                                                <input type="date" name="dob" class="form-control" value="{{ $users['user_dob'] }}">
                                            @endforeach

                                        </div>

                                        <div class="col-md-6 col-sm-6" >
                                            <label for="">Blood Group</label><br>
                                              <select name="bloodgroup" id="department" class="form-control">
                                                @foreach($bloodgroup as $bloodgroups)
                                                <option value="{{ $bloodgroups['bloodgroup'] }}">{{ $bloodgroups['bloodgroup'] }}</option>
                                                @endforeach
                                              </select>
                                        </div>

                                        <div class="col-md-6 col-sm-6" >
                                            <label for="">state</label><br>
                                             <select name="state" id="department" class="form-control">
                                                @foreach($state as $states)
                                                <option value="{{ $states['state'] }}">{{ $states['state'] }}</option>
                                                @endforeach
                                              </select>
                                        </div>

                                        <div class="col-md-6 col-sm-6" >
                                            <label for="">City</label><br>
                                             <select name="city" id="department" class="form-control">
                                                @foreach($city as $citys)
                                                <option value="{{ $citys['city'] }}">{{ $citys['city'] }}</option>
                                                @endforeach
                                              </select>
                                        </div>


                                        <div class="col-md-12 col-sm-12">
                                            <label for="">Address</label>
                                            <textarea class="form-control" rows="5" name="address" placeholder="update your address"></textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary"> Save </button>
                                <a href="{{ url('/profile') }}"><button type="button" class="btn btn-primary">cancle  </button></a>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
 </div>
{{-- </div> --}}
</section>


@endsection
