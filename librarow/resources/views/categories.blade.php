@extends('layouts.main')

@section('main')
 <div class="max-h-96 w-10/12 bg-white border border-blue-500 border-opacity-40 shadow-md shadow-blue-500 rounded-2xl mx-auto my-6">
    <div class="w-full h-16 text-center align-middle">
        <h1 class="text-4xl text-blue-500 font-bold uppercase mt-2 Tline">Categories</h1>
    </div>
    <div class=" w-full h-5/6  flex justify-evenly  flex-wrap">
    <div class="w-1/4 h-1/2  m-3">
        <div class=" w-full h-3/4">
            <img src="./img/comic.jpg" alt="" class="mx-auto w-2/4 h-48 object-contain border border-blue-500">
        </div>
        <div class=" w-full h-1/4 text-center">
            <h1 class="text-lg font-bold uppercase">Comic</h1>
            <a href="#"><button class="bg-blue-500 text-white w-24 h-8 rounded-md">View</button></a>
        </div>
    </div>
    <div class="w-1/4 h-1/2  m-3">
        <div class=" w-full h-3/4">
            <img src="./img/drama.jpg" alt="" class="mx-auto w-2/4 h-48 object-contain border border-blue-500">
        </div>
        <div class=" w-full h-1/4 text-center">
            <h1 class="text-lg font-bold uppercase">Drama</h1>
            <a href="#"><button class="bg-blue-500 text-white w-24 h-8 rounded-md">View</button></a>
        </div>
    </div>
    <div class="w-1/4 h-1/2  m-3">
        <div class=" w-full h-3/4">
            <img src="./img/romance.jpg" alt="" class="mx-auto w-2/4 h-48 object-contain border border-blue-500">
        </div>
        <div class=" w-full h-1/4 text-center">
            <h1 class="text-lg font-bold uppercase">romance</h1>
            <a href="#"><button class="bg-blue-500 text-white w-24 h-8 rounded-md">View</button></a>
        </div>
    </div>
    <div class="w-1/4 h-1/2  m-3">
        <div class=" w-full h-3/4">
            <img src="./img/horror.jpg" alt="" class="mx-auto w-2/4 h-48 object-contain border border-blue-500">
        </div>
        <div class=" w-full h-1/4 text-center">
            <h1 class="text-lg font-bold uppercase">horror</h1>
            <a href="#"><button class="bg-blue-500 text-white w-24 h-8 rounded-md">View</button></a>
        </div>
    </div>
    <div class="w-1/4 h-1/2  m-3">
        <div class=" w-full h-3/4">
            <img src="./img/stevejob.png" alt="" class="mx-auto w-2/4 h-48 object-contain border border-blue-500">
        </div>
        <div class=" w-full h-1/4 text-center">
            <h1 class="text-lg font-bold uppercase">Biography</h1>
            <a href="#"><button class="bg-blue-500 text-white w-24 h-8 rounded-md">View</button></a>
        </div>
    </div>
    <div class="w-1/4 h-1/2  m-3">
        <div class=" w-full h-3/4">
            <img src="./img/socio.jpg" alt="" class="mx-auto w-2/4 h-48 object-contain border border-blue-500">
        </div>
        <div class=" w-full h-1/4 text-center">
            <h1 class="text-lg font-bold uppercase">socio</h1>
            <a href="#"><button class="bg-blue-500 text-white w-24 h-8 rounded-md">View</button></a>
        </div>
    </div>
   
   
    </div>
</div>
@endsection


@section('footer')
 @include('layouts.footer')
@endsection