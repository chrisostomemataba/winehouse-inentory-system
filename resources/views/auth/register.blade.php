@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Registration form fields here -->

                            <!-- Name Field -->
<div class="form-group">
    <label for="name">{{ __('Name') }}</label>
    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
</div>

<!-- Email Field -->
<div class="form-group">
    <label for="email">{{ __('Email') }}</label>
    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email">
</div>

<!-- Password Field -->
<div class="form-group">
    <label for="password">{{ __('Password') }}</label>
    <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
</div>

<!-- Confirm Password Field -->
<div class="form-group">
    <label for="password-confirm">{{ __('Confirm Password') }}</label>
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
</div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
