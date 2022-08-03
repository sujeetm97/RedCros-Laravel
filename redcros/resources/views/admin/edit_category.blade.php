@extends('admin.include.admin')
@section('admin-container')
<div class="col-12 mt-3">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Edit Category</h4>
            <form method="POST" enctype="multipart/form-data" class="form">
                <div class="form-group col-md-6">
                    <label for="example-text-input" class="col-form-label">Enter Category</label>
                    <input class="form-control" type="text" id="name" name="category" required>
                </div>
                <button type="submit" class="btn btn-primary pr-4 pl-4" name="update" value="update">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
<?php include("include/footer.php") ?>
@endsection
