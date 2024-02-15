<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body class=" bg-gray-100">

    @include('layouts.nav')

    <main>
        {{-- Modal Button --}}
        <button class="showModal bg-blue-500 px-3 py-1 rounded text-white showModal">Show Modal</button>

      

       

    </main>

    @yield('footer')
    @include('layouts.script')
</body>

</html>
