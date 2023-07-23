@extends('layouts.auth')

@section('app')
  <div class="container-tight container">
    <h2 class="h2 text-muted mb-4 text-center">{{ __('Login') }}</h2>
    @if (session('status'))
      <div class="alert alert-success" role="alert">
        <div class="text-muted">{{ session('status') }}</div>
      </div>
    @endif
    <div class="card card-md shadow-sm">
      <div class="card-stamp">
        <div class="card-stamp-icon bg-primary text-white">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock-open" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M5 11m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z"></path>
            <path d="M12 16m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
            <path d="M8 11v-5a4 4 0 0 1 8 0"></path>
          </svg>
        </div>
      </div>
      <div class="card-body">
        <form action="/auth/login" method="post">
          @csrf
          {{-- <div class="mb-3">
            <label class="form-label">{{ __('Personal number') }}</label>
            <input type="text" id="personal_number" name="personal_number" class="form-control @error('personal_number') is-invalid @enderror"
              value="{{ old('personal_number') }}" placeholder="{{ __('Your personal number') }}">
            @error('personal_number')
              <div class="invalid-feedback">{{ $errors->first('personal_number') }}</div>
            @enderror
          </div> --}}
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
                <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
              </span>
            </label>
            <div class="mb-3">
              <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}"
                placeholder="{{ __('Your password') }}">
              @error('password')
                <div class="invalid-feedback">{{ $errors->first('password') }}</div>
              @enderror
            </div>
          </div>
          <div class="mb-2">
            <label class="form-check">
              <input type="checkbox" id="remember" name="remember" class="form-check-input" />
              <span class="form-check-label">{{ __('Remember me on this device') }}</span>
            </label>
          </div>
          <div class="form-footer">
            <button type="submit" id="submitButton" class="btn btn-primary w-100">{{ __('Login') }}</button>
          </div>
        </form>
      </div>
    </div>
    <div class="text-muted mt-3 text-center">
      {{ __('Don\'t have account yet?') }} <a href="{{ route('register') }}" tabindex="-1">{{ __('Register') }}</a>
    </div>
  </div>
@endsection
