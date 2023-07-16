<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/tabler.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/tabler-flags.min.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/tabler-payments.min.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/tabler-vendors.min.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/demo.min.css') }}" rel="stylesheet" />
  <title>Auth</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap');

    :root {
      --tblr-font-sans-serif: 'Roboto Condensed', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      --tblr-body-font-size: 0.92rem;
    }

    body {
      font-feature-settings: "cv03", "cv04", "cv11";
    }
  </style>
</head>

<body class="d-flex flex-column">
  <div class="sticky-top">
    @include('layouts.partials.header')
    @include('layouts.partials.navbar')
    <div class="page page-center">
      @yield('app')
    </div>
  </div>
  @yield('modals')
  @include('layouts.partials.logout')

  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/tabler.min.js') }}"></script>
  <script src="{{ asset('js/demo-theme.min.js') }}"></script>
  @stack('custom-scripts')
</body>

</html>
