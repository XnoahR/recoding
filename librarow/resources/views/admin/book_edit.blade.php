@extends('layouts.main')
@section('main')

        <section class="w-3/4 h-screen border border-blue-50 shadow-lg border-opacity-50 rounded-lg mx-auto my-8 p-3">
            <div class="w-full h-10 rounded-md border">
                <h2 class="text-blue-500 font-bold text-xl ms-3 py-1">Edit Buku</h2>
            </div>
        <div class="h-5/6 w-full bg-blue-50 mt-10 flex">
                <div class="me-1 h-full w-5/12 bg-blue-50 flex flex-col items-center justify-center  rounded-md">
                    <img src="{{ asset("/img/" . $book->cover) }}" alt="Book Cover" class="w-4/6">
                </div>
                <div class="h-full w-7/12 bg-blue-50 ">
                    

                    <form action="{{ route('book-data',) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <ul class="my-24">
                            <li class="text-left ms-4 mb-2">
                                <label for="title" class="ms-3 text-blue-500 font-bold">Judul</label><br>
                                <input type="text" name="title" id="" value="{{ $book->title }}" class="w-11/12 border border-blue-500 border-opacity-60 rounded-xl ms-2 py-1 px-4 mt-2">
                            </li>
                        <li class="text-left ms-4 mb-2">
                            <label for="author" class="ms-3 text-blue-500 font-bold">Pengarang</label><br>
                            <input type="text" name="author" id="" value="{{ $book->author }}" class="w-11/12 border border-blue-500 border-opacity-60 rounded-xl ms-2 py-1 px-4 mt-2">
                        </li>
                        <li class="text-left ms-4 mb-2">
                            <label for="category" class="ms-3 text-blue-500 font-bold">Kategori</label><br>
                            <input type="text" name="category" id="" value="{{ $book->category }}" class="w-11/12 border border-blue-500 border-opacity-60 rounded-xl ms-2 py-1 px-4 mt-2">
                        </li>
                        <li class="text-left ms-4 mb-2">
                            <label for="available" class="ms-3 text-blue-500 font-bold">Ketersediaan</label><br>
                            <input type="text" name="available" id="" value="{{ $book->available }}" class="w-11/12 border border-blue-500 border-opacity-60 rounded-xl ms-2 py-1 px-4 mt-2">
                        </li>
                        <li class="text-left ms-4 mb-2">
                            <label for="cover" class="ms-3 text-blue-500 font-bold">Sampul</label><br>
                            <input type="file" name="cover" id="" class=" file:bg-blue-500 file:text-white file:rounded-xl py-2">
                        </li>
                        {{-- Submit --}}
                        <li class="text-left ms-6 flex justify-center">
                            <button type="submit" class="bg-white border border-blue-500 text-blue-500 rounded-xl py-2 w-1/2 mt-4 hover:bg-blue-500 hover:border-white hover:text-white transition-all ease-linear delay-50">Save</button>
                        </li>
                        {{-- Return --}}
                        <li class="text-left ms-6 flex justify-center">
                            <a href="{{ route('book-data') }}" class="bg-white border border-red-500 text-red-500  rounded-xl py-2 w-1/2 mt-4 text-center hover:bg-red-500 hover:border-white hover:text-white transition-all ease-linear delay-50 ">Cancel</a>
                        </li>
                    </ul>
                </form>
            </div>
        
       </div>
    </section>
    
@endsection
