@extends('layouts.main')

@section('content')

<div class="card mx-lg-5 mt-5">
    <div class="card-header">
       Create Staff Account
    </div>
    <div class="card-body">
        <form action="/admin/staff" method="POST" class="form">
            @csrf
            @include('admin/staffs/form')
            <div class="form-group">
                <a href="/admin/staff/" class="btn btn-warning mr-3">Back</a>
                <input type="submit" class="btn btn-primary" value="Create Account">
            </div>
        </form>
    </div>
</div>

@endsection
