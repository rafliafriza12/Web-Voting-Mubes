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


    <div class="flex justify-center container mx-auto my-auto w-screen h-screen items-center flex-col p-[25px]">
       

        <div class="w-full  md:w-3/4  lg:w-1/3 flex flex-col items-center bg-[#1A1A1A] shadow-2xl rounded-md pt-5">
            <div class="text-slate-100 items-center">
                <div class="text-center pb-8 text-[44px] font-bold   ">Log In</div>
            </div>
            <!-- email input -->
            <div class="w-3/4 mb-8">
                <input type="text" name="username" id="username" class="w-full py-4 px-8 bg-[#272727] placeholder:font-semibold rounded hover:ring-1 hover:ring-gray-600  border-solid border-2 border-[#343434] text-white" placeholder="Username">
            </div>
            <!-- password input -->
            <div class="w-3/4 mb-8">
                <input type="password" name="password" id="password" class="w-full py-4 px-8 bg-[#272727] placeholder:font-semibold rounded hover:ring-1 hover:ring-gray-600 outline-slate-500  border-solid border-2 border-[#343434] text-white" placeholder="Password">
            </div>
            <!-- button -->
            <div class="w-3/4 mb-12">
                <a href="/voting">
                    <button type="submit" class="py-4 bg-[#4d4d4d] w-full rounded text-blue-50 font-bold transform transition-transform duration-300 ease-in-out  active:scale-95 hover:bg-[#404040]"> LOGIN</button>
                </a>
            </div>
        </div>
        
    </div>
    

   
</body>
</html>