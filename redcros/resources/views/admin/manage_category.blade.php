@extends('admin.include.admin')
@section('admin-container')

<div class="main-content-inner">

    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table">
            </i> Category Table
        </div>
        <div class="card-body">
            <div class="table-responsive data-tables datatable-primary">
                <form method="post" enctype="multipart/form-data" class="form">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr align="center">
                                <th>No</th>
                                <th>Category Name</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>

                        <tbody>
                                <tr align="center">
                                    <td>a</td>
                                    <td>b</td>
                                    <td><a href="#"><i class="fa fa-close" style="color:red;font-size:20px;"></i></a></td>
                                    <td><a href="#"><i class="fa fa-edit" style="font-size:20px;"></i></a></td>
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
