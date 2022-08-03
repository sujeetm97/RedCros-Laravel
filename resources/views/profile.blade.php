@extends('layouts.main')
@section('main-container')

<section class="content">
        @if (session()->has('update_status'))
            <script>
                window.onload=function()
                {
                    alert("update Successfully!");
                }
            </script>
        @endif
    <!-- Default box -->
    <div class="card card-solid">
      <div class="card-body pb-0">
        <div class="row">


          <div class="col-5 col-sm-5 col-md-12 d-flex align-items-stretch flex-column">
            <div class="card bg-light d-flex flex-fill">
              <div class="card-header text-muted border-bottom-0">
                Profile Page
              </div>
              <div class="card-body pt-0">
                <div class="row">
                  <div class="col-7">

                    <h2 class="lead"><b>
                        @foreach ($user as $users)
                        {{ $users->user_name }}
                        @endforeach
                    </b></h2>

                     <p class="text-muted text-sm"><b>Email: </b>
                        @foreach ($user as $users )
                        {{ $users->user_email }}
                        @endforeach
                    </p>

                    <p class="text-muted text-sm"><b>Mobile Number: </b>
                        @foreach ($user as $users )
                        {{ $users->user_mobileNO }}
                        @endforeach
                    </p>

                    <p class="text-muted text-sm"><b>Address: </b>
                        @foreach ($user as $users )
                        {{ $users->user_address }}
                        @endforeach
                    </p>

                    <p class="text-muted text-sm"><b>Gender: </b>
                        @foreach ($user as $users )
                            @php
                                if($user->user_address = 'M')
                                    echo 'Male';
                                elseif ($user->user_address = 'F')
                                    echo 'Female';
                                else
                                    echo 'Other';
                            @endphp
                        @endforeach
                    </p>

                    <p class="text-muted text-sm"><b>DOB: </b>
                        @foreach ($user as $users )
                        {{ $users->user_dob }}
                        @endforeach
                    </p>

                    <p class="text-muted text-sm"><b>Blood group: </b>
                        @foreach ($donor as $donors )
                             {{ $donors['bloodgroup'] }}
                        @endforeach
                    </p>

                    <ul class="ml-4 mb-0 fa-ul text-muted">

                    </ul>
                  </div>

                  {{-- <div class="col-5 text-center" style="margin-top: 2%">
                    <img src="{{url('frontend/user1.jpg')}}" alt="user-avatar" class="img-circle img-fluid">
                    <form action=" {{ url('/profile') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="custom-file">
                                <input type="file" name="file" id="" placeholder="" class="custom-file-input" aria-describedby="fileHelpId">
                                <span class="custom-file-control"></span>
                                <button type="submit" class="btn btn-primary">upload image</button>
                            </label>
                        </div>
                    </form> --}}
                        {{-- <input type="file" name="profilepicture" value="" style="margin-left: 38%; margin-bottom: 2%"> --}}
                  </div>

                </div>
              </div>
              <div class="card-footer">

                <div class="text-right">
                  <a href="{{ url('/updateprofile') }}" class="btn btn-sm btn-primary">
                    <i class="fas fa-user"></i> Update profile
                  </a>
                </div>



              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>


@endsection
