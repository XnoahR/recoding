@extends('layouts.main')
@section('main')
    @if (Session::get('Success'))
        {{-- pop up and dissapear --}}
        <p
            class="flex justify-center mx-auto w-64 h-16 items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800 ">
            {{ Session::get('Success') }}
        </p>
    @endif
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{-- Make a modal --}}
            
            <p
                class="flex justify-center mx-auto w-64 h-16 items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800 ">
                {{ $error }}
            </p>
        @endforeach
    @endif
    <section class="w-3/4 h-screen border border-blue-500 shadow-lg border-opacity-50 rounded-lg mx-auto my-8 p-3">
        <div class="w-full h-1/6">
            <h2 class="text-blue-500 font-bold text-xl ms-3">Data Buku</h2>
            <input type="search" name="caribuku" id="caribuku" placeholder="Cari Buku"
                class="w-64 ms-3 px-1 py-1 focus:outline-blue-500">
            <button type="submit" class="bg-white border border-blue-500 rounded-lg px-5 py-1 mt-3">Cari</button>
            <br>
            <button type="button" data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                class="font-bold bg-white text-blue-500 border border-blue-500 rounded-lg px-4 py-1 ms-3 mt-2 hover:bg-blue-500 hover:border-white hover:text-white transition-all ease-linear delay-50">Tambah Buku</button>

        </div>
        <div class="w-full h-4/6 text-center">
            <table class="table-auto w-full border border-blue-300">
                <thead class="border border-black bg-blue-300">
                    <th class="border border-black w-1/12">No</th>
                    <th class="border border-black w-2/12">Sampul</th>
                    <th class="border border-black w-3/12">Judul</th>
                    <th class="border border-black w-1/12">Ketersediaan</th>
                    <th class="border border-black w-2/12">Pengarang</th>
                    <th class="border border-black w-1/12">Kategori</th>
                    <th class="border border-black w-2/12">Aksi</th>

                </thead>
                <?php $i = 1; ?>
                @foreach ($books as $book)
                    <tr class="h-10 ">
                        <td class="border border-blue-300"> <?= $i ?></td>
                        <td class="border border-blue-300"><img src="{{ asset('./img/' . $book->cover) }}" alt=""
                                class="h-24 mx-auto"></td>
                        {{-- //New Knowledge --}}
                        <td class="border border-blue-300">{{ $book->title }}</td>
                        <td class="border border-blue-300">{{ $book->available }}</td>
                        <td class="border border-blue-300">{{ $book->author }}</td>
                        <td class="border border-blue-300">{{ $book->category }}</td>
                        <td class="border border-blue-300">
                            <a href="{{ route('book-edit', $book->id) }}"><button
                                    class="bg-blue-500 text-white px-2 py-1 rounded-lg ">Edit</button></a>
                            <form action="{{ route('book-delete', $book->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 text-white px-2 py-1 rounded-lg deleteButton">Delete</button>
                            </form>
                        </td>
                        <?php $i++; ?>
                    </tr>
                @endforeach


            </table>
        </div>
        <div class="h-1/6 w-full flex items-center">
            <ul class="flex justify-center mx-auto space-x-1">
                <li>
                    <a href="#"> <button class="bg-blue-500 text-white px-2 py-1 rounded-lg ">Prev</button></a>
                </li>
                <li>
                    <button class="bg-blue-500 text-white px-2 py-1 rounded-lg ">1</button>
                </li>
                <li>
                    <button class="bg-blue-500 text-white px-2 py-1 rounded-lg ">2</button>
                </li>
                <li>
                    <button class="bg-blue-500 text-white px-2 py-1 rounded-lg ">Next</button>
                </li>
            </ul>
        </div>
    </section>

    <div id="crud-modal" tabindex="-1" aria-hidden="true"
        class="hidden bg-black bg-opacity-30 overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
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
                        class="w-11/12 border border-blue-500 border-opacity-60 rounded-xl ms-2 py-1 px-4 mt-2" required>
                </div>
                <div class="p-3">
                    <label for="author" class="text-blue-500 font-bold">Pengarang</label><br>
                    <input type="text" name="author" id=""
                        class="w-11/12 border border-blue-500 border-opacity-60 rounded-xl ms-2 py-1 px-4 mt-2" required>
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
                        class="w-11/12 border border-blue-500 border-opacity-60 rounded-xl ms-2 py-1 px-4 mt-2" required>
                </div>
                <div class="p-3">
                    <label for="cover" class="text-blue-500 font-bold">Sampul</label><br>
                    <input type="file" name="cover" id=""
                        class=" file:bg-blue-500 file:text-white file:rounded-xl py-2">
                </div>
                <div class="flex justify-end items-center space-x-3 w-100 border-t p-3">
                    <button class="bg-blue-600 px-3 py-1 rounded text-white">Okay</button>
                    <button type="button" data-modal-close="crud-modal"
                        class="bg-red-600 px-3 py-1 rounded text-white closeModal">Cancel</button>
                </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const modalToggle = document.querySelector('[data-modal-toggle]');
                const modalCloser = document.querySelector('[data-modal-close]');
                const modal = document.getElementById('crud-modal');
                let isToggle = false;

                modalToggle.addEventListener('click', function() {
                    modal.classList.toggle('hidden'); 
                    modal.classList.toggle('flex');
                    if (!modal.classList.contains('hidden')) {
                        modal.querySelector('input').focus(); 
                    }
                });

                // Close modal when clicking outside of it
                modalCloser.addEventListener('click', function(event) {
                    if (event.target === modalCloser) {
                        modal.classList.add('hidden'); 
                        modal.classList.remove('flex'); 
                        console.log('clicked outside');
                    }
                });
            })
        </script>

    @endsection
