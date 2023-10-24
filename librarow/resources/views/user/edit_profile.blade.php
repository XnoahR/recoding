@extends('layouts.main')

@section('main')
<section id="profile_edit" class="h-screen w-5/12  shadow-lg rounded-xl text-center mx-auto border border-blue-500 border-opacity-60 my-10">
<h2 class="font-bold text-lg mt-3 mb-1">Edit Profile</h2>
<p>Foto Profile </p>
<img src="./img/649190d58e696.jpg" alt="" class="w-32 mx-auto border border-red-500">
<input type="file" name="profile_picture" id="" class=" file:bg-blue-500 file:text-white file:rounded-xl py-2">
</section>
@endsection
@section('footer')
@include('layouts.footer')
@endsection