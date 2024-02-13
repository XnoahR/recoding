<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body class=" bg-gray-100">

    @include('layouts.nav')

    <main>
        <div class="w-full h-screen fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-20">
        {{-- Modal --}}
        <div class="bg-gray-400 rounded shadow-lg w-1/3">
            {{-- Modal Header --}}
            <div class="border-b px-4 py-2">
                <h3>Modal Title</h3>
            </div>
            {{-- Modal Body --}}
            <div class="p-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis molestiae iste ullam aliquid et molestias nam veniam necessitatibus? Inventore, beatae iste! Reprehenderit nostrum neque voluptate doloribus tempora, quam sed sit vel incidunt ipsam veritatis autem voluptatum voluptates totam qui cumque reiciendis dignissimos quod esse aperiam ipsum ducimus ex labore.
            </div>
            <div class="flex justify-end items-center w-100 border-t p-3">
                <button class="bg-blue-600 px-3 py-1 rounded text-white">Okay</button>
                <button class="bg-red-600 px-3 py-1 rounded text-white">Cancel</button>
            </div>
        </div>
    </div>
    </main>

    @yield('footer')
    @include('layouts.script')
</body>

</html>
