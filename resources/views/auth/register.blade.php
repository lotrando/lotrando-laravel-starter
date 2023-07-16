@extends('layouts.auth')

@section('app')
  <div class="container-tight container">
    {{-- <div class="mb-4 text-center">
      <a href="." class="navbar-brand navbar-brand-autodark"><img src="{{ asset('static/logo.svg') }}" height="36" alt=""></a>
    </div> --}}
    <h2 class="h2 mb-4 text-center">Create new account</h2>
    <div class="card card-md shadow-sm">
      <div class="card-body">
        <form action="register" method="post">
          @csrf
          <div class="mb-3">
            <label class="form-label">{{ __('Personal number') }}</label>
            <input type="text" id="personal_number" name="personal_number" class="form-control @error('personal_number') is-invalid @enderror"
              placeholder="{{ __('Personal number') }}" value="{{ old('personal_number') }}">
            @error('personal_number')
              <div class="invalid-feedback">{{ $errors->first('personal_number') }}</div>
            @enderror
          </div>
          <div class="row mb-3">
            <div class="col-6">
              <label class="form-label">{{ __('Last name') }}</label>
              <input type="text" id="last_name" name="last_name" class="form-control @error('last_name') is-invalid @enderror"
                placeholder="{{ __('Enter last name') }}" value="{{ old('last_name') }}">
              @error('last_name')
                <div class="invalid-feedback">{{ $errors->first('last_name') }}</div>
              @enderror
            </div>
            <div class="col-6">
              <label class="form-label">{{ __('First name') }}</label>
              <input type="text" id="first_name" name="first_name" class="form-control @error('first_name') is-invalid @enderror"
                placeholder="{{ __('Enter first name') }}" value="{{ old('first_name') }}">
              @error('first_name')
                <div class="invalid-feedback">{{ $errors->first('first_name') }}</div>
              @enderror
            </div>
          </div>
          <div class="mb-2">
            <label class="form-label">{{ __('Email address') }}</label>
            <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
              placeholder="{{ __('Enter email address') }}" value="{{ old('email') }}">
            @error('email')
              <div class="invalid-feedback">{{ $errors->first('email') }}</div>
            @enderror
          </div>
          <div class="mb-2">
            <label class="form-label">{{ __('Password') }}</label>
            <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}"
              placeholder="Your password">
            @error('password')
              <div class="invalid-feedback">{{ $errors->first('password') }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label class="form-label">{{ __('Password Confirmation') }}</label>
            <div class="input-group input-group-flat">
              <input type="password" id="password_confirmation" name="password_confirmation"
                class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Password confirmation"
                value="{{ old('password_confirmation') }}">
            </div>
          </div>
          <div class="mb-2">
            <label class="form-check">
              <input class="form-check-input" id="terms" type="checkbox" onClick="check_agree(this.form)" />
              <span class="form-check-label">{{ __('Agree the') }} <a href="" data-bs-toggle="modal"
                  data-bs-target="#modal-terms">{{ __('terms and policy') }}</a>.
              </span>
            </label>
          </div>
          <div class="form-footer">
            <button type="submit" id="submitButton" class="btn btn-primary w-100" disabled>{{ __('Sign up') }}</button>
          </div>
        </form>
      </div>
    </div>
    <div class="text-muted mt-3 text-center">
      {{ __('Already have account?') }} <a href="{{ route('login') }}" tabindex="-1">{{ __('Sign in') }}</a>
    </div>
  </div>
@endsection

@section('modals')
  <div class="modal modal-blur fade" id="modal-terms" role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">{{ __('Nakládání s osobními údaji') }}</h5>
          <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="text-justify">
            Takovými osobními údaji jsou zejména údaje, které uvedete ve vyplněném registračním formuláři, nebo které společnosti sdělíte
            mailem, po telefonu nebo mobilu či jiného obdobného zařízení.
          </p>
          <p class="text-justify">
            Jedná se především o jméno, příjmení, e-mail nebo telefonní číslo.
          </p>
          </p>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('custom-scripts')
  <script>
    $(document).ready(function() {
      console.log('jQuery is ready!')
    })

    function check_agree(form) {
      if (form.terms.checked) {
        form.submitButton.disabled = false
      } else {
        form.submitButton.disabled = true
      }
    }
  </script>
@endpush
