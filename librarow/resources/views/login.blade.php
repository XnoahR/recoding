<!DOCTYPE html>
<html lang="en">
@include('layouts.head')


@if (Session::get('Success'))
    {{-- pop up and dissapear--}}
    <p class="flex justify-center mx-auto w-64 h-16 items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800 ">
        {{ Session::get('Success') }}  
    </p>
@endif
@if($errors->any())
    @foreach ($errors->all() as $error)
       {{-- @include('components.alert')
       @section('alert')
       <p>{{ $error }}</p>
        @endsection --}}
        <p class="flex justify-center mx-auto w-64 h-16 items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800 ">
            {{ $error }}
        </p>
    @endforeach
@endif
</div>

<body class="bg-gradient-to-br from-cyan-600 to-blue-500 bg-no-repeat">
    <div class="w-full h-screen flex items-center justify-center">
        <div class="w-2/3 h-5/6 bg-white rounded-xl flex ">
            <div id="register-banner" class="h-full w-1/2  rounded-l-xl flex flex-col justify-end reg-banner"">
                <h1 id="register-button"
                    class="bg-blue-400 w-32 py-2 outline outline-white rounded-md text-center mx-auto mb-12 z-50">
                    Register
                </h1>

                <form action="{{ route('register') }}" id="register-form" method="POST" class="reg-form hidden">
                    @csrf
                    <input type="text" name="name" id="" value="{{ Session::get('name') }} "    
                    class="bg-gray-100 my-3 px-3 w-1/2 h-8 mx-auto border-l-8 border-blue-500">
                    <input type="email" name="email" id="" value="{{ Session::get('email') }}"
                        class="bg-gray-100 my-3 px-3 w-1/2 h-8 mx-auto border-l-8 border-blue-500">
                    <input type="password" name="password" id=""
                        class="bg-gray-100 my-3 px-3 w-1/2 h-8 mx-auto border-l-8 border-blue-500">
                    <button type="submit" class="bg-blue-500 text-white w-1/2 mx-auto h-8 rounded-md">Register</button>
                </form>

                {{-- <img src="{{ asset("./img/lib.jpg") }}" alt="" class="w-full h-full object-cover contrast-75 rounded-l-xl">
           
            
           <h1 id="create-account" class="text-blue-300 text-xl text-center font-bold mb-5 underline z-50 ">Create an Account!</h1> --}}
            </div>

            <div id="login-banner" class="h-full w-1/2  flex flex-col justif justify-center log-banner">

                <div id="login-content" class="h-3/4 w-full flex flex-col space-y-12 log-form">
                <h2 id="login-header" class="text-xl font-semibold text-blue-500 text-center">Login Account</h2>
                <p id="login-desc" class="text-sm text-center w-10/12 mx-auto">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Aliquam, dolorum provident culpa asperiores molestiae cupiditate repellendus
                    libero molestias architecto consequatur.</p>
                <form id="login-form" action="{{ route('login-auth') }}" method="post" class="w-full mx-auto flex justify-center flex-col">
                    @csrf
                    <input type="email" name="email" value="{{ Session::get('email') }}" id=""
                        class="bg-gray-100 my-3 px-3 w-1/2 h-8 mx-auto border-l-8 border-blue-500">
                    <input type="password" name="password" id=""
                        class="bg-gray-100 my-3 px-3 w-1/2 h-8 mx-auto border-l-8 border-blue-500">
                    <button type="submit" class="bg-blue-500 text-white w-1/2 mx-auto h-8 rounded-md">Login</button>
                </form>
            </div>
            <h1 id="login-button"
            class="bg-blue-400 w-32 py-2 outline outline-white rounded-md text-center mx-auto mb-12 hidden">
            Login
        </h1>
            </div>
        </div>
    </div>
    @include('layouts.script')
</body>

</html>
