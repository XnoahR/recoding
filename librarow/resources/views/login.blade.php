<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body class="bg-gradient-to-br from-cyan-600 to-blue-500 bg-no-repeat">
    <div class="w-full h-screen flex items-center justify-center">
       <div class="w-2/3 h-5/6 bg-white rounded-xl flex ">
        <div id="register-banner" class="h-full w-1/2 border border-red-500 rounded-l-xl flex flex-col justify-end reg-banner"">
            <h1 id="register-button" class="bg-blue-400 w-32 py-2 outline outline-white rounded-md text-center mx-auto mb-12 z-50">
                Register
            </h1>

            <form action="" id="register-form" method="post" class="reg-form ">
                <input type="email" name="email" id="" class="bg-gray-100 my-3 px-3 w-1/2 h-8 mx-auto border-l-8 border-blue-500">
                <input type="password" name="password" id="" class="bg-gray-100 my-3 px-3 w-1/2 h-8 mx-auto border-l-8 border-blue-500">
                <button type="submit" class="bg-blue-500 text-white w-1/2 mx-auto h-8 rounded-md">Login</button>
            </form>

            {{-- <img src="{{ asset("./img/lib.jpg") }}" alt="" class="w-full h-full object-cover contrast-75 rounded-l-xl">
           
            
           <h1 id="create-account" class="text-blue-300 text-xl text-center font-bold mb-5 underline z-50 ">Create an Account!</h1> --}}
        </div>

        <div id="login-banner" class="h-full w-1/2 flex flex-col justify-center space-y-12  ">
            <h2 id="login-header" class="text-xl font-semibold text-blue-500 text-center">Login Account</h2>
            <p id="login-desc" class="text-sm text-center w-10/12 mx-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, dolorum provident culpa asperiores molestiae cupiditate repellendus libero molestias architecto consequatur.</p>
            <form id="login-form" action="" method="post" class="w-full mx-auto flex justify-center flex-col">
                <input type="email" name="email" id="" class="bg-gray-100 my-3 px-3 w-1/2 h-8 mx-auto border-l-8 border-blue-500">
                <input type="password" name="password" id="" class="bg-gray-100 my-3 px-3 w-1/2 h-8 mx-auto border-l-8 border-blue-500">
                <button type="submit" class="bg-blue-500 text-white w-1/2 mx-auto h-8 rounded-md">Login</button>
            </form>
            <h1 id="login-account" class="text-blue-300 text-xl text-center font-bold mb-5 underline z-50 hidden ">Login My Account!</h1>
        </div> 
       </div>
    </div>
    @include('layouts.script')
</body>
</html>