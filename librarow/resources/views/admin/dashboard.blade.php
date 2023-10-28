@extends('layouts.main')
@section('main')
    <section class="h-3/4-screen w-full grid grid-cols-12  ">
        <div class="col-span-10 col-start-2 grid grid-cols-4 gap-6   content-center">
            <div class="flex flex-col justify-around h-72 border  rounded-lg shadow-md shadow-blue-400 ease-in duration-200 hover:-translate-y-2 hover:bg-blue-100 ">
                <img src="{{ asset('./img/mahasiswa.png') }}" alt="" class="w-48 mx-auto">
                <h2 class="font-bold text-blue-500 text-center text-lg uppercase">Data Mahasiswa</h2>
                <a href="#" class="text-center mx-auto bg-blue-500 text-white h-6 w-20 rounded-xl">View</a>
            </div>
            <div class="flex flex-col justify-around h-72 border  rounded-lg shadow-md shadow-blue-400 ease-in duration-200 hover:-translate-y-2 hover:bg-blue-100 ">
                <img src="{{ asset('./img/pustakawan.png') }}" alt="" class="w-48 mx-auto">
                <h2 class="font-bold text-blue-500 text-center text-lg uppercase">Data pustakawan</h2>
                <a href="#" class="text-center mx-auto bg-blue-500 text-white h-6 w-20 rounded-xl">View</a>
            </div>
            <div class="flex flex-col justify-around h-72 border  rounded-lg shadow-md shadow-blue-400 ease-in duration-200 hover:-translate-y-2 hover:bg-blue-100 ">
                <img src="{{ asset('./img/book.png') }}" alt="" class="w-48 mx-auto">
                <h2 class="font-bold text-blue-500 text-center text-lg uppercase">Data buku</h2>
                <a href="#" class="text-center mx-auto bg-blue-500 text-white h-6 w-20 rounded-xl">View</a>
            </div>
            <div class="flex flex-col justify-around h-72 border  rounded-lg shadow-md shadow-blue-400 ease-in duration-200 hover:-translate-y-2 hover:bg-blue-100 ">
                <img src="{{ asset('./img/notifikasi.png') }}" alt="" class="w-48 mx-auto">
                <h2 class="font-bold text-blue-500 text-center text-lg uppercase">notifikasi</h2>
                <a href="#" class="text-center mx-auto bg-blue-500 text-white h-6 w-20 rounded-xl">View</a>
            </div>
         
            
            
        </div>
    </section>
@endsection