@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <h2 class="text-center">Edit Instructor Profile</h2>
        <form action="/instructor/update" method="POST" class="mt-4">
            @csrf
            @method('PUT')
            <!-- Name -->
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name"
                    value="{{ old('name', $instructor->name) }}" placeholder="Enter name" required>
            </div>
            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email"
                    value="{{ old('email', $instructor->email) }}" placeholder="Enter email" required>
            </div>
            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">New Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter new password">
                <small class="form-text text-muted">Leave blank if you don't want to change the password.</small>
            </div>
            <!-- Confirm Password -->
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                    placeholder="Confirm new password">
            </div>
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Update Profile</button>
        </form>
    </div>
@endsection
