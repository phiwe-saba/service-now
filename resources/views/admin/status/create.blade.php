@extends('layouts.app')
@section('content')
<h1>Status</h1>

<form action="{{route('admin.status.store')}}" method="POST" encrypt="multipart/form-data">
    @csrf
    <div class="form-group pb-3">
        <label for="status_name">Status:</label>
        <input type="text" name="status_name" id="status_name" class="form-control">
    </div>
    <button class="btn btn-primary">Create</button>
</form>
@endsection