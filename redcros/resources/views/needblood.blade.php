@extends('layouts.main')
@section('main-container')

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style="margin-top:50px;">
      <div class="container">

        <div class="section-title">
          <h2 style="color:red">Need Blood</h2>
          </div>
      </div>



      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-8 mt-5 mt-lg-0">

             <form action=" {{ url('/needblood') }}" method="post">
                        @csrf

                        <div class="row">

                            <div class="col-md-3 col-sm-12" >
                                <label for="bg">blood group</label><br>
                                 <select name="bloodgroup" id="bg" class="form-control">
                                     @foreach($bloodgroup as $key => $value)
                                     <option value="{{$value}}">{{$value}}</option>
                                    @endforeach
                                  </select> 
                            </div>

                            <div class="col-md-3 col-sm-12" >
                                <label for="state">State</label><br>
                                 <select name="state" id="st" class="form-control">
                                    @foreach($state as $key => $value)
                                    <option value="{{$value}}">{{$value}}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <button type="submit" style="margin-top:25px;" name="search" class="btn btn-primary">Search</button>
                            </div>

                        </div>


                    </form>

          </div>

        </div>
        {{-- ###### --}}
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">donors</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>name</th>
                          <th>Email</th>
                          <th>Contact Number</th>
                          <th>Blood group</th>
                          <th>Gender</th>
                          <th>Age</th>
                          <th>State</th>
                          <th>City</th>
                          <th>Donated At</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($donor as $donors)
                            <tr>
                                <td>{{$donors->name}}</td>
                                <td>{{$donors->email}}</td>
                                <td>{{$donors->mobileNO}}</td>
                                <td>{{$donors->bloodgroup}}</td>

                                <td>
                                    @php
                                        if($donors->user_gender = 'M')
                                            echo 'Male';
                                        elseif ($donors->user_gender = 'F')
                                            echo 'Female';
                                        else
                                            echo 'Other';
                                    @endphp
                                </td>

                                <td>{{$donors->age}}</td>
                                <td>{{$donors->state}}</td>
                                <td>{{$donors->city}}</td>
                                <td>{{$donors->created_at}}</td>
                            </tr>
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


    </section><!-- End Contact Section -->
@endsection
