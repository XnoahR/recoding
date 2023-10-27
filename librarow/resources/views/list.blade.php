@extends('layouts.main')

@section('main')
<section class="w-full mx-auto h-auto grid grid-cols-12 my-16 gap-3">
    <div class="col-span-3 bg-blue-300">
        List
    </div>
    <div class="col-span-9 grid grid-cols-3 gap-3">
        <div class="col-span-1 h-108 border border-red-500 flex flex-col justify-evenly">
            <img src="{{ asset('./img/comic.jpg') }}" alt="" class="w-28 mx-auto">
            <h2 class="font-bold text-lg text-center text-blue-500">
                Spiderman
            </h2>
            <p class="overflow-hidden h-24 mx-5 my-3 text-sm">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus, iusto molestias rerum saepe, nostrum dolore dolor fugit alias expedita perferendis magnam laborum maiores natus quas, ad excepturi quasi! Ipsum sapiente tempora aspernatur ea, voluptatem obcaecati? Velit, dolor? Dolore aut laboriosam error ratione fuga deserunt, voluptatem nobis quos, doloremque, voluptate blanditiis!
            </p>
            <h2 class="font-bold ms-4">
                Author: Stan Lee
            </h2>
            <a href="#" class="font-bold text-lg mx-auto px-3 rounded-xl bg-blue-500 text-white">
                Borrow
            </a>
        </div>
        <div class="col-span-1 h-108 border border-red-500 flex flex-col justify-evenly">
            <img src="{{ asset('./img/comic.jpg') }}" alt="" class="w-28 mx-auto">
            <h2 class="font-bold text-lg text-center text-blue-500">
                Spiderman
            </h2>
            <p class="overflow-hidden h-24 mx-5 my-3 text-sm">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus, iusto molestias rerum saepe, nostrum dolore dolor fugit alias expedita perferendis magnam laborum maiores natus quas, ad excepturi quasi! Ipsum sapiente tempora aspernatur ea, voluptatem obcaecati? Velit, dolor? Dolore aut laboriosam error ratione fuga deserunt, voluptatem nobis quos, doloremque, voluptate blanditiis!
            </p>
            <h2 class="font-bold ms-4">
                Author: Stan Lee
            </h2>
            <a href="#" class="font-bold text-lg mx-auto px-3 rounded-xl bg-blue-500 text-white">
                Borrow
            </a>
        </div>
        <div class="col-span-1 h-108 border border-red-500 flex flex-col justify-evenly">
            <img src="{{ asset('./img/comic.jpg') }}" alt="" class="w-28 mx-auto">
            <h2 class="font-bold text-lg text-center text-blue-500">
                Spiderman
            </h2>
            <p class="overflow-hidden h-24 mx-5 my-3 text-sm">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus, iusto molestias rerum saepe, nostrum dolore dolor fugit alias expedita perferendis magnam laborum maiores natus quas, ad excepturi quasi! Ipsum sapiente tempora aspernatur ea, voluptatem obcaecati? Velit, dolor? Dolore aut laboriosam error ratione fuga deserunt, voluptatem nobis quos, doloremque, voluptate blanditiis!
            </p>
            <h2 class="font-bold ms-4">
                Author: Stan Lee
            </h2>
            <a href="#" class="font-bold text-lg mx-auto px-3 rounded-xl bg-blue-500 text-white">
                Borrow
            </a>
        </div>
    </div>
</section>

@endsection
@section('footer')
    @include('layouts.footer')
@endsection