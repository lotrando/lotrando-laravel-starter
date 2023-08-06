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
    @import url('https://rsms.me/inter/inter.css');

    :root {
      --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
    }

    body {
      font-feature-settings: "cv03", "cv04", "cv11";
    }
  </style>
</head>

<body>
  <div class="page">
    @yield('app')
  </div>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/tabler.min.js') }}"></script>
  <script src="{{ asset('js/demo-theme.min.js') }}"></script>
</body>

</html>
