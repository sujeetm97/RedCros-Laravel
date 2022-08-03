@extends('admin.include.admin')
@section('admin-container')
<div class="main-content-inner">

    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table">
            </i> Manage Videos
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form method="post">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead style=" background-color:#4336fb !important;">
                            <tr align="center">
                                <th>No</th>
                                <th>Category Name</th>
                                <th>Posted by</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>video</th>
                                <th>Delete</th>
                            </tr>
                        </thead>

                        <tbody>
									<tr align="center">
										<td>A</td>
										<td>B</td>
										<td>C</td>
										<td style="max-width:100px !important;">D</td>
										<td style="max-width:200px !important;">E</td>
										<td>
											<div class="agile-products">
											</div>
										</td>

										<td><a href="#"><i class="fa fa-close" style="color:red;font-size:20px;">F</i></a></td>
									</tr>
                        </tbody>
                    </table>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
