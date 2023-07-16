@extends('layouts.auth')

@section('app')
  <div class="container-tight container">
    <h2 class="h2 text-muted mb-4 text-center">{{ __('Password reset') }}</h2>
    @if (session('status'))
      <div class="alert alert-success" role="alert">
        <h2 class="alert-title">{{ __('New password saved!') }}</h2>
        <div class="text-muted">{{ session('status') }}</div>
      </div>
    @endif
    <div class="card card-md">
      <div class="card-stamp">
        <div class="card-stamp-icon bg-primary text-white">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock-dollar" width="24" height="24" viewBox="0 0 24 24"
            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M13 21h-6a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2h10"></path>
            <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0"></path>
            <path d="M8 11v-4a4 4 0 1 1 8 0v4"></path>
            <path d="M21 15h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5"></path>
            <path d="M19 21v1m0 -8v1"></path>
          </svg>
        </div>
      </div>
      <div class="card-body">
        <form action="{{ route('password.update') }}" method="POST">
          @csrf
          <input type="hidden" name="token" value="{{ $request->route('token') }}">
          <div class="mb-3">
            <label class="form-label">{{ __('Email address') }}</label>
            <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
              value="{{ old('email') ?? $request->email }}" readonly>
            @error('email')
              <div class="invalid-feedback">{{ $errors->first('email') }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label class="form-label">{{ __('Password') }}</label>
            <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Your new password"
              autofocus>
            @error('password')
              <div class="invalid-feedback">{{ $errors->first('password') }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label class="form-label">{{ __('Password Confirmation') }}</label>
            <div class="input-group input-group-flat">
              <input type="password" id="password_confirmation" name="password_confirmation"
                class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="New password confirmation"
                value="{{ old('password_confirmation') }}">
            </div>
          </div>
          <div class="form-footer">
            <button type="submit" id="submitButton" class="btn btn-primary w-100">{{ __('Password reset') }}</button>
          </div>
        </form>
      </div>
    </div>
    <div class="text-muted mt-3 text-center">
      {{ __('Already have account?') }} <a href="{{ route('login') }}" tabindex="-1">{{ __('Sign in') }}</a>
    </div>
  </div>
@endsection
