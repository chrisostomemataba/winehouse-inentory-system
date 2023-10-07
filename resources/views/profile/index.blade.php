@extends('layouts.app')

@section('content')
<div class="container">
    <h2>User Profile</h2>
    <p><strong>Name:</strong> John Doe</p>
    <p><strong>Email:</strong> john@example.com</p>
    <!-- Add more user profile information and options here -->
    <a href="{{ route('settings.index') }}" class="btn btn-primary">Edit Profile</a>
</div>
@endsection
