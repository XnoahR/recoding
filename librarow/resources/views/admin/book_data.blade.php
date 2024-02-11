@extends('layouts.main')
@section('main')
    <section class="w-3/4 h-screen border border-blue-500 shadow-lg border-opacity-50 rounded-lg mx-auto my-8 p-3">
       <div class="w-full h-1/6">
        <h2 class="text-blue-500 font-bold text-xl ms-3">Data Buku</h2>
        <input type="search" name="caribuku" id="caribuku" placeholder="Cari Buku" class="w-64 ms-3 px-1 py-1 focus:outline-blue-500"> 
        <button type="submit" class="bg-white border border-blue-500 rounded-lg px-5 py-1 mt-3">Cari</button>
        <br>
        <a href=""><button type="submit" class="bg-blue-500 text-white rounded-lg px-4 py-1 ms-3 mt-2">Tambah Buku</button></a>

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
               <?php $i=1?>
               @foreach ($books as $book)
               <tr class="h-10 ">
                   <td class="border border-blue-300"> <?=$i?></td>
                   <td class="border border-blue-300"><img src="{{ asset("./img/" . $book->cover) }}" alt="" class="h-24 mx-auto"></td> 
                   {{-- //New Knowledge --}}
                   <td class="border border-blue-300">{{ $book->title }}</td>
                   <td class="border border-blue-300">{{ $book->available }}</td>
                   <td class="border border-blue-300">{{ $book->author }}</td>
                   <td class="border border-blue-300">{{ $book->category }}</td>
                   <td class="border border-blue-300">
                     <a href="{{ route('book-edit',$book->id) }}"><button class="bg-blue-500 text-white px-2 py-1 rounded-lg ">Edit</button></a> 
                     <form action="{{ route('book-delete', $book->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded-lg">Delete</button>
                    </form> 
                    </td>
                    <?php $i++?>
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
@endsection