@extends('layouts.auth')

@section('app')
  <div class="container-tight container">
    <h2 class="h2 text-muted mb-4 text-center">{{ __('Register') }}</h2>
    <div class="card card-md shadow-sm">
      <div class="card-stamp">
        <div class="card-stamp-icon bg-primary text-white">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M12.5 21h-5.5a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2h10a2 2 0 0 1 1.74 1.012"></path>
            <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0"></path>
            <path d="M8 11v-4a4 4 0 1 1 8 0v4"></path>
            <path d="M16 19h6"></path>
            <path d="M19 16v6"></path>
          </svg>
        </div>
      </div>
      <div class="card-body">
        <form action="register" method="post">
          @csrf
          {{-- <div class="mb-3">
            <label class="form-label">{{ __('Personal number') }}</label>
            <input type="text" id="personal_number" name="personal_number" class="form-control @error('personal_number') is-invalid ? is-valid @enderror"
              placeholder="{{ __('Number') }}" value="{{ old('personal_number') }}">
            @error('personal_number')
              <div class="invalid-feedback">{{ $errors->first('personal_number') }}</div>
            @enderror
          </div> --}}
          <div class="row mb-3">
            <div class="col-6">
              <label class="form-label">{{ __('Last name') }}</label>
              <input type="text" id="last_name" name="last_name" class="form-control @error('last_name') is-invalid @enderror"
                placeholder="{{ __('Last name') }}" value="{{ old('last_name') }}">
              @error('last_name')
                <div class="invalid-feedback">{{ $errors->first('last_name') }}</div>
              @enderror
            </div>
            <div class="col-6">
              <label class="form-label">{{ __('First name') }}</label>
              <input type="text" id="first_name" name="first_name" class="form-control @error('first_name') is-invalid @enderror"
                placeholder="{{ __('First name') }}" value="{{ old('first_name') }}">
              @error('first_name')
                <div class="invalid-feedback">{{ $errors->first('first_name') }}</div>
              @enderror
            </div>
          </div>
          <div class="mb-2">
            <label class="form-label">{{ __('Email address') }}</label>
            <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
              placeholder="{{ __('Your job email') }}" value="{{ old('email') }}">
            @error('email')
              <div class="invalid-feedback">{{ $errors->first('email') }}</div>
            @enderror
          </div>
          <div class="mb-2">
            <label class="form-label">{{ __('Password') }}</label>
            <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}"
              placeholder="{{ __('Your password') }}">
            @error('password')
              <div class="invalid-feedback">{{ $errors->first('password') }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label class="form-label">{{ __('Password Confirmation') }}</label>
            <div class="input-group input-group-flat">
              <input type="password" id="password_confirmation" name="password_confirmation"
                class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="{{ __('Password confirmation') }}"
                value="{{ old('password_confirmation') }}">
            </div>
          </div>
          <div class="mb-2">
            <label class="form-check">
              <input class="form-check-input" id="terms" name="terms" type="checkbox" onClick="check_agree(this.form)" value="1"
                @if (old('terms') == '1') checked @endif>
              <span class="form-check-label">{{ __('Agree the') }} <a href="" data-bs-toggle="modal"
                  data-bs-target="#modal-terms">{{ __('terms and policy') }}</a>.
              </span>
            </label>
          </div>
          <div class="form-footer">
            <button type="submit" id="submitButton" class="btn btn-primary w-100"
              @if (old('terms') != '1') disabled @endif>{{ __('Register') }}</button>
          </div>
        </form>
      </div>
    </div>
    <div class="text-muted mt-3 text-center">
      {{ __('Already have account?') }} <a href="{{ route('login') }}" tabindex="-1">{{ __('Login') }}</a>
    </div>
  </div>
@endsection

@section('modals')
  <div class="modal modal-blur fade" id="modal-terms" data-bs-backdrop="static" data-bs-keyboard="false"role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">{{ __('Handling of personal data') }}</h5>
          <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="text-justify">
            {{ __('Such personal data are, in particular data that you enter in the completed registration form, or that you communicate to the company by e-mail, by telephone or mobile phone or other similar device.') }}
          </p>
          <p class="text-justify">
            {{ __('This is primarily a first name, last name, e-mail or phone number.') }}
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
