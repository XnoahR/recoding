@extends('layouts.main')

@section('main')
<section id="profile_edit" class="h-screen w-5/12  shadow-lg rounded-xl text-center mx-auto border border-blue-500 border-opacity-60 my-10">
<h2 class="font-bold text-lg mt-3 mb-1">Edit Profile</h2>
<p>Foto Profile </p>
<img src="{{ asset('./img/649190d58e696.jpg') }}" alt="" class="w-32 mx-auto border border-red-500">
<input type="file" name="profile_picture" id="" class=" file:bg-blue-500 file:text-white file:rounded-xl py-2">
<ul>
    <li class="text-left ms-4 mb-2">
        <label for="name" class="ms-2">Name</label><br>
        <input type="text" name="name" id="" class="w-11/12 border border-blue-500 border-opacity-60 rounded-xl ms-2 py-1 px-2 mt-2">
    </li>
    <li class="text-left ms-4 mb-2">
        <label for="nim" class="ms-2">NIM</label><br>
        <input type="text" name="nim" id="" class="w-11/12 border border-blue-500 border-opacity-60 rounded-xl ms-2 py-1 px-2 mt-2">
    </li>
    <li class="text-left ms-4">
        <label for="email" class="ms-2">Email</label><br>
        <input type="email" name="email" id="" class="w-11/12 border border-blue-500 border-opacity-60 rounded-xl ms-2 py-1 px-2 mt-2">
    </li>
    <li class="text-left ms-4">
        <label for="phone" class="ms-2">Phone</label><br>
        <input type="text" name="phone" id="" class="w-11/12 border border-blue-500 border-opacity-60 rounded-xl ms-2 py-1 px-2 mt-2">
    </li>
    <li class="text-left ms-4">
        <label for="password" class="ms-2">Password</label><br>
        <input type="password" name="password" id="" class="w-11/12 border border-blue-500 border-opacity-60 rounded-xl ms-2 py-1 px-2 mt-2">
    </li>
</ul>
<button class="bg-blue-500 text-white rounded-xl py-2 px-4 mt-4">Save</button>
</section>
@endsection
@section('footer')
@include('layouts.footer')
@endsection