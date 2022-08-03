@extends('admin.include.admin')
@section('admin-container')
<div class="main-content-inner">

    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table">
            </i> Contact Us Table
        </div>
        <div class="card-body">
            <div class="table-responsive data-tables datatable-primary">
                <form method="post" enctype="multipart/form-data" class="form">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr align="center">
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Delete</th>
                            </tr>
                        </thead>

                        <tbody>
                                <tr align="center">
                                    <td>A</td>
                                    <td>B</td>
                                    <td>C</td>
                                    <td>D</td>
                                    <td><a href="#"><i class="fa fa-close" style="color:red;font-size:20px;"></i></a></td>
                                </tr>
                        </tbody>
                    </table>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
