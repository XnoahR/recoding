@extends('layouts.main')
@section('main')
    <section class="w-3/4 h-screen border border-blue-500 shadow-lg border-opacity-50 rounded-lg mx-auto my-8 p-3">
       <div class="w-full h-1/6">
        <h2 class="text-blue-500 font-bold text-xl ms-3">Data Mahasiswa</h2>
        <input type="search" name="carimhs" id="carimahs" placeholder="Cari Mahasiswa" class="w-64 ms-3 px-1 py-1 focus:outline-blue-500"> 
        <button type="submit" class="bg-white border border-blue-500 rounded-lg px-5 py-1 mt-3">Cari</button>
       </div>
       <div class="w-full h-4/6 text-center">
            <table class="table-auto w-full border border-blue-300">
               <thead class="border border-black bg-blue-300">
                <th class="border border-black w-1/12">No</th>
                <th class="border border-black w-2/12">Nama</th>
                <th class="border border-black w-2/12">Email</th>
                <th class="border border-black w-2/12">Phone</th>
                <th class="border border-black w-1/12">NIM</th>
                <th class="border border-black w-2/12">Status</th>
                <th class="border border-black w-2/12">Action</th>
               </thead>
               
               <?php $i = 1; ?>
               @foreach($users as $user)
                
               <tr class="h-10">
                     <td class="border border-blue-300"><?= $i?></td>
                     <td class="border border-blue-300">{{ $user->name }}</td>
                     <td class="border border-blue-300">{{ $user->email }}</td>
                     <td class="border border-blue-300">{{ $user->phone }}</td>
                     <td class="border border-blue-300">{{ $user->nim }}</td>
                    <td class="border border-blue-300">@if ($user->status_id == 1)
                        <span class="bg-green-500 text-white px-2 py-1 rounded-lg">Aktif</span>
                    @else
                        <span class="bg-red-500 text-white px-2 py-1 rounded-lg">Tidak Aktif</span>
                    @endif</td>
                    <td class="border border-blue-300   ">
                            <button class="bg-blue-500 text-white px-2 py-1 rounded-lg ">Edit</button>
                            <button class="bg-red-500 text-white px-2 py-1 rounded-lg ">Delete</button>
               </tr>
               <?php $i++; ?>
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