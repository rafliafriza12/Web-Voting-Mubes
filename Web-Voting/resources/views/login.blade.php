<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Login Page</title>
</head>
<body class="bg-[#252525] font-poppins">
    @if(session()->has('success'))
    <div class="flex sticky top-0 items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Info</span>
        <div>
          <span class="font-medium">{{section('success')}}</span>
        </div>
    </div>
    @endif

    @if(session()->has('loginError'))
    <div class="flex items-center p-4 mb-4 sticky top-0 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Info</span>
        <div>
          <span class="font-medium">{{session('loginError')}}</span>
        </div>
    </div>
    @endif

    <form class="z-[-1]" action="{{Route('postLogin')}}" method="POST">
        @csrf
        <div class="flex justify-center container mx-auto my-auto w-screen h-screen items-center flex-col p-[25px]">
                <div class="w-full  md:w-3/4  lg:w-1/3 flex flex-col items-center bg-[#1A1A1A] shadow-2xl rounded-md pt-5">
                    <div class="text-slate-100 items-center">
                        <div class="text-center pb-8 text-[44px] font-bold">Log In</div>
                    </div>
                    <!-- email input -->
                    <div class="w-3/4 mb-8">
                        <input value="{{old('npm')}}" type="text" name="npm" id="npm" class="w-full py-4 px-8 bg-[#272727] placeholder:font-semibold rounded hover:ring-1 hover:ring-gray-600  border-solid border-2 border-[#343434] text-white" placeholder="NPM" required>
                    </div>
                    @error('username')
                        {{$message}}
                    @enderror
                    <!-- password input -->
                    <div class="w-3/4 flex relative mb-8">
                        <input type="password" value="{{old('password')}}" name="password" id="password" class="w-full py-4 px-8 bg-[#272727] placeholder:font-semibold rounded hover:ring-1 hover:ring-gray-600 outline-slate-500  border-solid border-2 border-[#343434] text-white" placeholder="Password" required>
                        <button type="button" id="toggle">
                            <svg id="eye" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6 opacity-[0.7] absolute top-[50%] left-[85%] sm:left-[90%] translate-y-[-50%]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </button>   
                    </div>
                    @error('password')
                        {{$message}}
                    @enderror
                    <!-- button -->
                    <div class="w-3/4 mb-12">
                        {{-- <a href="/voting"> --}}
                        <button type="submit" class="py-4 bg-[#4d4d4d] w-full rounded text-blue-50 font-bold transform transition-transform duration-300 ease-in-out  active:scale-95 hover:bg-[#404040]"> LOGIN</button>
                        {{-- </a> --}}
                    </div>

                    <div class="pb-5 px-5 ">
                        <span class="block text-sm text-center text-gray-400">© 2023 Rafli | Ahmad | Arkan. All Rights Reserved.</span>
                    </div>
                </div>
        </div>
    </form>

    <script src="{{asset('src/toggle.js')}}"></script>
</body>
</html>