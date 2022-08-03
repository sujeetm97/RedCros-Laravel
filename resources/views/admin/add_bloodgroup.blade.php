@extends('admin.include.admin')
@section('admin-container')

<div class="col-12 mt-3">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Add BloodGroup</h4>

            <form action="{{ url('/admin/index/add_bloodgroup') }}"  method="post" enctype="multipart/form-data" role="form" class="form">
                @csrf
                <div class="form-group col-md-6">
                    <label for="example-text-input" class="col-form-label">Add Blood group</label>
                    <input class="form-control" type="text" min="1" max="100" id="name" name="bloodgroup" required>
                    <span class="text-danger">
                        @error('bloodgroup')
                            {{ $message}}
                        @enderror
                    </span>
                    <span class="text-success">
                        @if (session()->has('added_bloodgroup'))
                          {{ session()->get('added_bloodgroup') }}
                        @endif
                    </span>

                </div>
                <button type="submit" class="btn btn-primary pr-4 pl-4">Submit</button>
            </form>

        </div>
    </div>
</div>
</div>
@endsection
