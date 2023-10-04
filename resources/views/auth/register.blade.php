@extends('layouts.app')
@section('content')
<div class="container-fluid pt-3">
    <h1 class="text-center">Register</h1>
    <form action="{{ route('auth.register')}}" method="POST" encrypt="multipart\form">
        @csrf

        <div class="form-group pb-3">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control">

            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group pb-3">
            <label for="surname">Surname:</label>
            <input type="text" id="surname" name="surname" class="form-control">

            @error('surname')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group pb-3">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" class="form-control">

            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group pb-3">
            <label for="contact_number">Contact number:</label>
            <input type="text" id="contact_number" name="contact_number" class="form-control">

            @error('contact_number')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group pb-3">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" class="form-control">

            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group pb-3">
            <label for="role">Role:</label>
            <select id="role" name="role" class="form-control">
                <option value="select">Please select role</option>
                <option value="user">User</option>
                <option value="admin">Admin</option>
                <option value="technician">Technician</option>
                <option value="salesperson">Sales Person</option>
                <option value="accountsperson">Accounts Person</option>
            </select>

            @error('role')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection