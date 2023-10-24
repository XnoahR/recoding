@extends('layouts.main')

@section('main')
<section id="profile_main" class="w-11/12 h-3/4-screen mx-auto my-6  flex justify-around  items-center">
    <div class="w-2/6 h-3/5  ">
        <img src="./img/649190d58e696.jpg" alt="" class="h-full  rounded-full mx-auto border border-blue-500 border-opacity-20">
    </div>
    <div class="w-2/4 h-4/6 border border-blue-500 border-opacity-50 shadow-lg flex flex-wrap rounded-lg">
        <div class="w-1/2 h-1/2   text-center flex flex-col justify-center">
            <h3 class="text-lg font-bold uppercase ">Status</h3>
            <p class=" bold uppercase ">Available</p>
        </div>
        <div class="w-1/2 h-1/2   text-center flex flex-col justify-center">
            <button class="bg-blue-600 h-10 w-24 mx-auto rounded-xl text-white font-semibold">History</button>
        </div>
        <div class="w-1/2 h-1/2   text-center flex flex-col justify-center items-center space-y-2">
            <h3 class="text-lg font-bold uppercase">Pending:</h3>
            <p class="w-6 h-6 font-semibold uppercase text-white bg-red-500 rounded-full">1</p>
        </div>
        <div class="w-1/2 h-1/2   text-center flex flex-col justify-center items-center space-y-2">
            <h3 class="text-lg font-bold uppercase">Approved:</h3>
            <p class="w-6 h-6 font-semibold uppercase text-white bg-green-500 rounded-full">2</p>
        </div>
    </div>
</section>

<section id="profile_info" class="w-10/12 h-auto mb-16 mx-auto">
    <a href="#" class="text-blue-400 font-bold underline ms-4 text-lg">Edit Profile</a>
    <div class=" h-16 w-full my-4 rounded-lg shadow-lg">
        <h3 class="font-bold text-lg ms-4">Name</h3>
        <p class="ms-4">Joko Noto Boto</p>
    </div>
    <div class=" h-16 w-full my-4 rounded-lg shadow-lg">
        <h3 class="font-bold text-lg ms-4">NIM</h3>
        <p class="ms-4">M05210xx</p>
    </div>
    <div class=" h-16 w-full my-4 rounded-lg shadow-lg">
        <h3 class="font-bold text-lg ms-4">Email</h3>
        <p class="ms-4">jnboto5@rata.com</p>
    </div>
    <div class=" h-16 w-full my-4 rounded-lg shadow-lg">
        <h3 class="font-bold text-lg ms-4">Phone</h3>
        <p class="ms-4">085132569420</p>
    </div>
    <div class=" h-16 w-full my-4 rounded-lg shadow-lg">
        <h3 class="font-bold text-lg ms-4">Username</h3>
        <p class="ms-4">Jawa_asli</p>
    </div>
    <div class=" h-16 w-full my-4 rounded-lg shadow-lg">
        <h3 class="font-bold text-lg ms-4">Buku yang sedang dipinjam</h3>
        <p class="ms-4">2</p>
    </div>
</section>
@endsection
@section('footer')
@include('layouts.footer')
@endsection