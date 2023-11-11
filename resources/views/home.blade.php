@extends('layouts.app')

@section('app')
  <div class="page">
    <div class="page-wrapper">
      <!-- Page body -->
      <div class="page-body">
        <div class="container-xl d-flex flex-column justify-content-center">
          @if (session('status'))
            <div class="alert alert-success shadow-sm" role="alert">
              <div class="text-muted">{{ session('status') }}</div>
            </div>
          @endif
          <div class="empty">
            <div class="empty-img"><img src="{{ asset('static/illustrations/undraw_printing_invoices_5r4r.svg') }}" height="128" alt="">
            </div>
            <p class="empty-title">No results found</p>
            <p class="empty-subtitle text-muted">
              Try adjusting your search or filter to find what you're looking for.
            </p>
            <div class="empty-action">
              <a class="btn btn-primary" href="./.">
                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M12 5l0 14" />
                  <path d="M5 12l14 0" />
                </svg>
                Add your first client
              </a>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-transparent d-print-none">
        <div class="container-xl">
          <div class="row align-items-center flex-row-reverse text-center">
            <div class="col-lg-auto ms-lg-auto">
              <ul class="list-inline list-inline-dots mb-0">
                <li class="list-inline-item"><a class="link-secondary" href="./docs/">Documentation</a></li>
                <li class="list-inline-item"><a class="link-secondary" href="./license.html">License</a></li>
                <li class="list-inline-item"><a class="link-secondary" href="https://github.com/tabler/tabler" target="_blank" rel="noopener">Source code</a></li>
                <li class="list-inline-item">
                  <a class="link-secondary" href="https://github.com/sponsors/codecalm" target="_blank" rel="noopener">
                    <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                    <svg class="icon text-pink icon-filled icon-inline" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                    </svg>
                    Sponsor
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-12 col-lg-auto mt-lg-0 mt-3">
              <ul class="list-inline list-inline-dots mb-0">
                <li class="list-inline-item">
                  Copyright &copy; 2023
                  <a class="link-secondary" href=".">Tabler</a>.
                  All rights reserved.
                </li>
                <li class="list-inline-item">
                  <a class="link-secondary" href="./changelog.html" rel="noopener">
                    v1.0.0-beta17
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
@endsection
