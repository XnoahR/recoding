@extends('layouts.main')

@section('main')
<section class="w-11/12 h-3/4-screen mx-auto my-6 border border-red-500 flex justify-around  items-center">
    <div class="w-2/6 h-3/6 mt- border border-red-500">
        <img src="./img/649190d58e696.jpg" alt="" class="h-full rounded-full mx-auto border border-blue-500 border-opacity-50">
    </div>
    <div class="w-2/4 h-4/6 border border-blue-500 border-opacity-50 shadow-lg flex flex-wrap">
        <div class="w-1/2 h-1/2 border border-red-500 text-center flex flex-col justify-center">
            <h3 class="text-lg font-bold uppercase ">Status</h3>
            <p class=" bold uppercase ">Available</p>
        </div>
        <div class="w-1/2 h-1/2 border border-red-500 text-center flex flex-col justify-center">
            <button class="bg-blue-600 h-10 w-24 mx-auto rounded-xl text-white font-semibold">History</button>
        </div>
        <div class="w-1/2 h-1/2 border border-red-500 text-center flex flex-col justify-center">
            s
        </div>
        <div class="w-1/2 h-1/2 border border-red-500 text-center flex flex-col justify-center">
            s
        </div>
    </div>

</section>
@endsection
@section('footer')
@include('layouts.footer')
@endsection