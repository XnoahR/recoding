@extends('layouts.main')
@section('main')
    <section class="w-3/4 h-screen border border-blue-500 shadow-lg border-opacity-50 rounded-lg mx-auto my-8 p-3">
       <div class="w-full h-1/6 border border-red-500">
        <h2 class="text-blue-500 font-bold text-xl ms-3">Data Mahasiswa</h2>
        <input type="search" name="carimhs" id="carimahs" placeholder="Cari Mahasiswa" class="w-64 ms-3 px-2 py-1 focus:outline-blue-500"> 
        <button type="submit" class="bg-white border border-blue-500 rounded-lg px-5 py-1">Cari</button>
       </div>
       <div class="w-full h-4/6 border border-red-500 text-center">
            <table class="table-auto w-full border border-blue-300">
               <thead class="border border-blue-300">
                <th class="border border-blue-300 w-1/12">No</th>
                <th class="border border-blue-300 w-2/12">Nama</th>
                <th class="border border-blue-300 w-2/12">NIM</th>
                <th class="border border-blue-300 w-2/12">Email</th>
                <th class="border border-blue-300 w-2/12">Status</th>
                <th class="border border-blue-300 w-3/12">Action</th>
               </thead>
               <tr class="h-10">
                     <td class="border border-blue-300">1</td>
                     <td class="border border-blue-300">Rizky</td>
                     <td class="border border-blue-300">123456789</td>
                     <td class="border border-blue-300">xxx@gmail.com</td>
                    <td class="border border-blue-300">Aktif</td>
                    <td class="border border-blue-300   ">
                            <button class="bg-blue-500 text-white px-2 py-1 rounded-lg ">Edit</button>
                            <button class="bg-red-500 text-white px-2 py-1 rounded-lg ">Delete</button>
               </tr>
              
            
            </table>
       </div>
    </section>
@endsection