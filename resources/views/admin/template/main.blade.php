<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>

    <x-gtm.script/>

    <title>@yield('title', 'Laravel App Admin')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="">
    <meta name="robots" content="noindex, nofollow"/>
    <link rel="canonical" href="{{ Request::url() }}">
    {!! \Sentry\Laravel\Integration::sentryTracingMeta() !!}

    <link rel="stylesheet" href="{{ mix('css/app.css')}}">

    @stack('import_head')
  </head>
  <body class="bg-gray-100 dark:bg-gray-900 dark:text-white">
    <x-gtm.no-script></x-gtm.no-script>
    <div id="app">
      @include('admin.template.navbar')

      <div class="min-h-screen">
        @yield('content')
      </div>
    </div>

    <script defer src="{{ mix('/js/manifest.js') }}"></script>
    <script defer src="{{ mix('/js/vendor.js') }}"></script>
    <script defer src="{{ mix('/js/app.js') }}"></script>

    @stack('import_foot')
  </body>
</html>
