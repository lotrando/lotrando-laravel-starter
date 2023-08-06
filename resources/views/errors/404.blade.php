@extends('layouts.error')

@section('app')
  <script src="./dist/js/demo-theme.min.js?1674944402"></script>
  <div class="page page-center">
    <div class="container py-5">
      <div class="empty">
        <div class="empty-header">404</div>
        <p class="empty-title">{{ __('Oops… You just found an error page') }}</p>
        <p class="empty-subtitle text-muted">
          {{ __('We are sorry but the page you are looking for was not found') }}
        </p>
        <div class="empty-action">
          <a href="{{ redirect()->back() }}" class="btn btn-primary">
            <!-- Download SVG icon from http://tabler-icons.io/i/arrow-left -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
              fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M5 12l14 0" />
              <path d="M5 12l6 6" />
              <path d="M5 12l6 -6" />
            </svg>
            {{ __('Back') }}
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
