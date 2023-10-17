<!DOCTYPE html>
<html lang="en">

<head>
   @include('layouts.head')
</head>

<body class=" bg-gray-100">
   
@include('layouts.nav')

    <main>
      @yield('main')
    </main>

    @include('layouts.script')
</body>
</html>
