@extends('layouts.auth')

@section('app')
  <div class="page-body">
    <div class="container-xl">
      <div class="page page-center">
        <div class="container-tight container py-4">
          <div class="card card-md">
            <div class="card-body">
              <h2 class="h2 mb-4 text-center">Login to your account</h2>
              <form action="./" method="post" autocomplete="off" novalidate>
                <div class="mb-3">
                  <label class="form-label">Email address</label>
                  <input type="email" class="form-control" placeholder="your@email.com" autocomplete="off">
                </div>
                <div class="mb-3">
                  <label class="form-label">
                    Password
                    <span class="form-label-description">
                      <a href="./forgot-password.html">{{ __('I forgot password') }}</a>
                    </span>
                  </label>
                  <div class="input-group input-group-flat">
                    <input type="password" class="form-control" placeholder="Your password" autocomplete="off">
                  </div>
                </div>
                <div class="mb-2">
                  <label class="form-check">
                    <input type="checkbox" class="form-check-input" />
                    <span class="form-check-label">{{ __('Remember me on this device') }}</span>
                  </label>
                </div>
                <div class="form-footer">
                  <button type="submit" id="submitButton" class="btn btn-primary w-100">Sign in</button>
                </div>
              </form>
            </div>
          </div>
          <div class="text-muted mt-3 text-center">
            Don't have account yet? <a href="{{ route('register') }}" tabindex="-1">Sign up</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
