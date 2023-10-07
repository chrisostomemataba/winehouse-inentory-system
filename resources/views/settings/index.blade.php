@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Settings</h2>
    <form action="{{ route('settings.update') }}" method="POST">
        @csrf
        <!-- Sample settings options and form fields -->
        <div class="form-group">
            <label for="timezone">Timezone</label>
            <select name="timezone" id="timezone" class="form-control">
                <option value="UTC">UTC</option>
                <option value="America/New_York">America/New York</option>
                <!-- Add more timezone options here -->
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save Settings</button>
    </form>
</div>
@endsection
