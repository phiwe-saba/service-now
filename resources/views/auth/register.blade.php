@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <form action="" method="POST" encrypt="multipart\form">
        @csrf

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="surname">Surname:</label>
            <input type="text" id="surname" name="surname" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="contact_number">Contact number:</label>
            <input type="text" id="contact_number" name="contact_number" class="form-control">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="text" id="password" name="password" class="form-control">
        </div>

        <div class="form-group">
            <label for="role">Role:</label>
            <select id="role" name="role">
                <option value="user">User</option>
                <option value="admin">Admin</option>
                <option value="technician">Technician</option>
                <option value="salesperson">Sales Person</option>
                <option value="accountsperson">Accounts Person</option>
            </select>
        </div>

        <button claas="btn btn-primary">Submit</button>
    </form>
</div>
@endsection