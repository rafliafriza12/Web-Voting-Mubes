<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Admin</title>
</head>
<body class=" bg-gray-900 w-screen h-screen overflow-hidden">
    @include('sidebar')
    <div class=" w-full h-full mt-[9vh]">
        <div class=" w-full h-[70%] box-border py-[2vh] flex justify-evenly  items-end">
            <div class="bg-gradient-to-b from-pink-500 to-purple-600 w-[20%] h-[70%] font-poppins font-bold text-white text-[7vh] flex justify-center items-center rounded-t-[2vh]">70%</div>
            <div class="bg-gradient-to-b from-purple-600 to-pink-500 w-[20%] h-[30%] font-poppins font-bold text-white text-[7vh] flex justify-center items-center rounded-t-[2vh]">30%</div>
        </div>
        <div class=" flex justify-evenly pl-[2.6vw] items-start box-border pt-[2.6vh] h-[30%] text-gray-400 font-montserrat font-bold text-[3vh]">
            <div>
                <p>No. urut    : 01</p>
                <p>Nama Calon  : Fulan bin Fulan</p>
                <p>Total Suara : 0</p>
            </div>
            <div>
                <p>No. urut    : 02</p>
                <p>Nama Calon  : Fulan bin Fulan</p>
                <p>Total Suara : 0</p>
            </div>
        </div>
    </div>
    <script src="{{asset('src/sidebar.js')}}"></script>
</body>
</html>