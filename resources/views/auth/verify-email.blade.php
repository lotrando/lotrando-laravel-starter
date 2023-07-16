@extends('layouts.auth')

@section('app')
  <div class="container-tight container">
    <h2 class="h2 text-muted mb-4 text-center">{{ __('Verify email address') }}</h2>
    @if (session('status'))
      <div class="alert alert-success shadow-sm" role="alert">
        <div class="text-muted">{{ session('status') }}</div>
      </div>
    @endif
    <div class="card card-md shadow-sm">
      <div class="card-stamp">
        <div class="card-stamp-icon bg-primary text-white">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-at" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
            <path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28"></path>
          </svg>
        </div>
      </div>
      <div class="card-body">
        {{ 'Check your email and verify your account' }}
      </div>
    </div>
  </div>
@endsection
