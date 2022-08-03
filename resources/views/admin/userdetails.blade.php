@extends('admin.include.admin')
@section('admin-container')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">User details</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>name</th>
                  <th>Email</th>
                  <th>Contact Number</th>
                  <th>Address</th>
                  <th>Gender</th>
                  <th>Date of Brith</th>
                  <th>sign In At</th>
                  <th>Action</th>
                </tr>
                </thead>


                <tbody>
                    @foreach($user as $users)
                    {{-- {{dd($users->user_id);}} --}}

                    <form action=" {{ url('/admin/userdetails/') }}/{{ $users->user_id }}" method="post">
                        @csrf

                        <tr>
                            <td>{{$users->user_name}}</td>
                            <td>{{$users->user_email}}</td>
                            <td>{{$users->user_mobileNO}}</td>
                            <td>{{$users->user_address}}</td>

                            <td>
                                @php
                                    if($users->user_gender = 'M')
                                        echo 'Male';
                                    elseif ($users->user_gender = 'F')
                                        echo 'Female';
                                    else
                                        echo 'Other';
                                @endphp
                            </td>

                            <td>{{$users->user_dob}}</td>
                            <td>{{$users->created_at}}</td>
                            <td><button type="submit" class="btn btn-danger">DELETE</button></td>
                        </tr>

                    </form>
                    @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
</div>


</section>
{{-- <div class="col-12 mt-3">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Add Age</h4>

            <form action="{{ url('/admin/index/add_age') }}"  method="post" enctype="multipart/form-data" role="form" class="form">
                @csrf
                <div class="form-group col-md-6">
                    <label for="example-text-input" class="col-form-label">Enter Age</label>
                    <input class="form-control" type="number" min="1" max="100" id="name" name="age" required>
                    <span class="text-danger">
                        @error('age')
                            {{ $message}}
                        @enderror
                    </span>
                    <span class="text-success">
                        @if (session()->has('added_age'))
                          {{ session()->get('added_age') }}
                        @endif
                    </span>

                </div>
                <button type="submit" class="btn btn-primary pr-4 pl-4" name="insert">Submit</button>
            </form>

        </div>
    </div>
</div>
</div> --}}
@endsection
