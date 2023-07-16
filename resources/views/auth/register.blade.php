@extends('layouts.auth')

@section('app')
  <div class="page-body">
    <div class="container-xl">
      <div class="page page-center">
        <div class="container-tight container py-4">
          <div class="card card-md">
            <div class="card-body">
              <h2 class="h2 mb-4 text-center">Create new account</h2>
              <form action="register" method="post">
                @csrf
                <div class="mb-3">
                  <label class="form-label">{{ __('Personal number') }}</label>
                  <input type="text" id="personal_number" name="personal_number" class="form-control" placeholder="{{ __('Personal number') }}"
                    value="{{ old('personal_number') }}">
                </div>
                <div class="mb-3">
                  <label class="form-label">{{ __('Name') }}</label>
                  <input type="text" id="name" name="name" class="form-control" placeholder="{{ __('Enter full name') }}" value="{{ old('name') }}">
                </div>
                <div class="mb-2">
                  <label class="form-label">{{ __('Email address') }}</label>
                  <input type="text" id="email" name="email" class="form-control" placeholder="{{ __('Enter email address') }}"
                    value="{{ old('email') }}">
                </div>
                <div class="mb-2">
                  <label class="form-label">{{ __('Password') }}</label>
                  <div class="input-group input-group-flat">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label">{{ __('Password Confirmation') }}</label>
                  <div class="input-group input-group-flat">
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Password confirmation">
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-check">
                    <input class="form-check-input" id="terms" type="checkbox" onClick="check_agree(this.form)" />
                    <span class="form-check-label">{{ __('Agree the') }} <a href="" data-bs-toggle="modal"
                        data-bs-target="#modal-terms">{{ __('terms and policy') }}</a>.
                    </span>
                  </label>
                </div>
                <div class="form-footer">
                  <button type="submit" id="submitButton" class="btn btn-primary w-100" disabled>Create new account</button>
                </div>
              </form>
              <div class="text-muted mt-3 text-center">
                Already have account? <a href="{{ route('login') }}" tabindex="-1">Sign in</a>
              </div>
            </div>
          </div>
        </div>
      </div>
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
