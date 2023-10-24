@extends('layouts.main')

@section('main')
<section class="w-11/12 h-3/4-screen mx-auto my-6  flex justify-around  items-center">
    <div class="w-2/6 h-3/5  ">
        <img src="./img/649190d58e696.jpg" alt="" class="h-full rounded-full mx-auto border border-blue-500 border-opacity-20">
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
@endsection
@section('footer')
@include('layouts.footer')
@endsection