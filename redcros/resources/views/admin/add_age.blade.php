@extends('admin.include.admin')
@section('admin-container')

<div class="col-12 mt-3">
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
</div>
@endsection
