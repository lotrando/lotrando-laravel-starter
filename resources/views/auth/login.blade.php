@extends('layouts.auth')

@section('app')
  <div class="container-tight container">
    {{-- <div class="mb-4 text-center">
      <a href="." class="navbar-brand navbar-brand-autodark"><img src="{{ asset('static/logo.svg') }}" height="36" alt=""></a>
    </div> --}}
    <h2 class="h2 mb-4 text-center">Login to your account</h2>
    <div class="card card-md shadow-sm">
      <div class="card-body">
        <form action="/auth/login" method="post">
          @csrf
          <div class="mb-3">
            <label class="form-label">{{ __('Personal number') }}</label>
            <input type="text" id="personal_number" name="personal_number" class="form-control @error('personal_number') is-invalid @enderror"
              value="{{ old('personal_number') }}" placeholder="{{ __('Your personal number') }}">
            @error('personal_number')
              <div class="invalid-feedback">{{ $errors->first('personal_number') }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label class="form-label">{{ __('Email address') }}</label>
            <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
              placeholder="{{ __('Your job email') }}">
            @error('email')
              <div class="invalid-feedback">{{ $errors->first('email') }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label class="form-label">
              {{ __('Password') }}
              <span class="form-label-description">
                <a href="#">{{ __('Forgot your password?') }}</a>
              </span>
            </label>
            <div class="mb-3">
              <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}"
                placeholder="Your password">
              @error('password')
                <div class="invalid-feedback">{{ $errors->first('password') }}</div>
              @enderror
            </div>
          </div>
          <div class="mb-2">
            <label class="form-check">
              <input type="checkbox" class="form-check-input" />
              <span class="form-check-label">{{ __('Remember me on this device') }}</span>
            </label>
          </div>
          <div class="form-footer">
            <button type="submit" id="submitButton" class="btn btn-primary w-100">{{ __('Sign in') }}</button>
          </div>
        </form>
      </div>
    </div>
    <div class="text-muted mt-3 text-center">
      Don't have account yet? <a href="{{ route('register') }}" tabindex="-1">Sign up</a>
    </div>
  </div>
@endsection
