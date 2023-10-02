@extends('layouts.app')
@section('content')
<h1 class="pb-3">Department</h1>
<form action="{{ route('admin.department.store')}}" method="POST" encrypt="multipart/form-data">
    @csrf
    <div class="form-group pb-3">
        <label for="dep_name">Department name:</label>
        <input type="text" name="dep_name" id="dep_name" class="form-control">
    </div>
    <button class="btn btn-primary">Submit</button>
</form>
@endsection