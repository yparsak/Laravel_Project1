<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="utf-8">
     <title> @yield('title') </title>
  </head>

<body>

  <img src="{{ asset('packages/img/logo.png') }}" />

  @yield('content')

</body>
</html>
