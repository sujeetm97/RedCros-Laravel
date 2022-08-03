@extends('admin.include.admin')
@section('admin-container')
</div>

<?php $statuscheck = session('admin_sucess'); ?>
@if ($statuscheck == '1')
<script>
    window.onload=function()
    {
        alert("Login success");
        // window.location="index.php";
    }
</script>
@endif
@endsection
