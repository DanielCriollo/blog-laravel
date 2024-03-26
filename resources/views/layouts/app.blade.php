<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @include('layouts.partials.styles')
  </head>
  <body>
    @yield('content')

    @include('layouts.partials.scripts')
  </body>
</html>