<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body class=" bg-gray-100">

    @include('layouts.nav')

    <main>


        <!-- Modal toggle -->
        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button">
            Toggle modal
        </button>

        <!-- Main modal -->
        <div id="crud-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
          <div class="bg-white rounded shadow-lg w-1/3 ">
            {{-- Modal Header --}}
            <div class="border-b px-4 py-2">
                <h3>Modal Title</h3>
            </div>
            {{-- Modal Body --}}
            <form action="{{ route('book-store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="p-3">
                    <label for="title" class="text-blue-500 font-bold">Judul</label><br>
                    <input type="text" name="title" id=""
                        class="w-11/12 border border-blue-500 border-opacity-60 rounded-xl ms-2 py-1 px-4 mt-2">
                </div>
                <div class="p-3">
                    <label for="author" class="text-blue-500 font-bold">Pengarang</label><br>
                    <input type="text" name="author" id=""
                        class="w-11/12 border border-blue-500 border-opacity-60 rounded-xl ms-2 py-1 px-4 mt-2">
                </div>
                <div class="p-3">
                    {{-- radio Category --}}
                    <label for="category" class="text-blue-500 font-bold">Kategori</label><br>
                    <select name="category" id=""
                        class="w-11/12 border border-blue-500 border-opacity-60 rounded-xl ms-2 py-1 px-4 mt-2">
                        <option value="comic">Comic</option>
                        <option value="drama">Drama</option>
                        <option value="romance">Romance</option>
                        <option value="biography">Biography</option>
                        <option value="socio">Socio</option>
                    </select>
                </div>
                <div class="p-3">
                    <label for="available" class="text-blue-500 font-bold">Ketersediaan</label><br>
                    <input type="text" name="available" id=""
                        class="w-11/12 border border-blue-500 border-opacity-60 rounded-xl ms-2 py-1 px-4 mt-2">
                </div>
                <div class="p-3">
                    <label for="cover" class="text-blue-500 font-bold">Sampul</label><br>
                    <input type="file" name="cover" id=""
                        class=" file:bg-blue-500 file:text-white file:rounded-xl py-2">
                </div>
                <div class="flex justify-end items-center space-x-3 w-100 border-t p-3">
                    <button class="bg-blue-600 px-3 py-1 rounded text-white">Okay</button>
                    <button type="button" data-modal-close="crud-modal" class="bg-red-600 px-3 py-1 rounded text-white closeModal">Cancel</button>
                </div>
        </div>
    </div>
    

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const modalToggle = document.querySelector('[data-modal-toggle]');
                const modalCloser = document.querySelector('[data-modal-close]');
                const modal = document.getElementById('crud-modal');
                let isToggle = false;

                modalToggle.addEventListener('click', function() {
                    modal.classList.toggle('hidden'); // Toggle the 'hidden' class
                    modal.classList.toggle('flex'); // Toggle the 'flex' class
                    if (!modal.classList.contains('hidden')) {
                        modal.querySelector('input').focus();
                    }
                });

                // Close modal when clicking outside of it
                modalCloser.addEventListener('click', function(event) {
                    if (event.target === modalCloser) {
                        modal.classList.add('hidden'); // Add the 'hidden' class
                        modal.classList.remove('flex'); // Remove the 'flex' class
                        console.log('clicked outside');
                    }
                });
            })
        </script>




    </main>

    @yield('footer')
    @include('layouts.script')
</body>

</html>
