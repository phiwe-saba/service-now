@extends('layouts.app')
@section('content')
<h1>Departments</h1>

<a href="{{route('admin.department.create')}}" class="btn btn-primary">Create</a>
@endsection