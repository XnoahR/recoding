@extends('layouts.main')
@section('main')
    <section class="w-3/4 h-screen border border-blue-500 shadow-lg border-opacity-50 rounded-lg mx-auto my-8 p-3">
       <div class="w-full h-1/6 border border-red-500">
        <h2 class="text-blue-500 font-bold text-xl ms-3">Data Mahasiswa</h2>
        <input type="search" name="carimhs" id="carimahs" placeholder="Cari Mahasiswa" class="w-64 ms-3 px-2 py-1 focus:outline-blue-500"> 
        <button type="submit" class="bg-white border border-blue-500 rounded-lg px-5 py-1">Cari</button>
       </div>
       
    </section>
@endsection