@extends('layouts.auth')

@section('app')
  <div class="container-tight container">
    <h2 class="h2 text-muted mb-4 text-center">{{ __('Forgot password') }}</h2>
    @if (session('status'))
      <div class="alert alert-success shadow-sm" role="alert">
        <div class="text-muted">{{ session('status') }}</div>
      </div>
    @endif
    <div class="card card-md shadow-sm">
      <div class="card-stamp">
        <div class="card-stamp-icon bg-primary text-white">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock-question" width="24" height="24" viewBox="0 0 24 24"
            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M15 21h-8a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2h10c.265 0 .518 .052 .75 .145"></path>
            <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0"></path>
            <path d="M8 11v-4a4 4 0 1 1 8 0v4"></path>
            <path d="M19 22v.01"></path>
            <path d="M19 19a2.003 2.003 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483"></path>
          </svg>
        </div>
      </div>
      <div class="card-body">
        <form action="{{ route('password.request') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label class="form-label">{{ __('Email address') }}</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
              placeholder="{{ __('Enter your registration email') }}">
            @error('email')
              <div class="invalid-feedback">{{ $errors->first('email') }}</div>
            @enderror
          </div>
          <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100">
              <!-- Download SVG icon from http://tabler-icons.io/i/mail -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                <path d="M3 7l9 6l9 -6" />
              </svg>
              {{ __('Send me a link to change my password') }}
            </button>
          </div>
        </form>
      </div>
      <div class="text-muted mb-3 text-center">
        <a href="{{ route('login') }}">{{ __('Back') }}</a> {{ __('to the sign in screen.') }}
      </div>
    </div>
  </div>
@endsection
