<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>Admin</title>
</head>
<body class=" bg-gray-900 w-screen h-screen overflow-hidden">
    @include('sidebar')
<div class=" block">
    <div class="w-screen h-[61vh] flex gap-8 mt-[9vh] mx-6">
        {{-- kandidat --}}
        <div class="mt-[10vh] sm:mt-[2vh] h-[100vh] overflow-scroll sm:overflow-hidden p-[60px] sm:p-[0px] sm:justify-evenly  sm:items-start box-border pt-[2.6vh] sm:h-[100%] text-gray-400 font-montserrat font-bold text-[1.7vw]">
            <div class=" flex flex-col items-center  border rounded-lg shadow md:flex-row border-gray-700 bg-gray-800 hover:bg-gray-700">
                <div class="sm:hidden">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{url('img/ganjar.png')}}" alt="">
                </div>
                <img class="hidden sm:block object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{url('img/ganjar.png')}}" alt="">
                <div class="flow-root px-10 w-[15vw]">
                    <ul role="list" class="divide-y divide-gray-700">
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center">
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-base font-bold font-poppins truncate text-white">
                                        NPM
                                    </p>
                                    <p class="text-base font-poppins  truncate text-gray-400">
                                        2108107010000
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center ">
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-base font-bold font-poppins  truncate text-white">
                                        Nama
                                    </p>
                                    <p class="text-base font-poppins truncate text-gray-400">
                                        Fulan Bin Fulan
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    {{-- <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-2.jpg" alt="Michael image"> --}}
                                </div>
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-base font-bold font-poppins  truncate text-white">
                                        Total Suara
                                    </p>
                                    <div id="calon1" class=" pt-3 text-center text-2xl font-poppins  text-white">
                                        
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
               </div>
            </div>
            
            <div class=" mt-10 flex flex-col items-center  border  rounded-lg shadow md:flex-row border-gray-700 bg-gray-800 hover:bg-gray-700">
                <div class="sm:hidden">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{url('img/ganjar.png')}}" alt="">
                </div>

                <img class="hidden sm:block object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{url('img/ganjar.png')}}" alt="">
                <div class="flow-root px-10 w-[15vw]">
                    <ul role="list" class="divide-y divide-gray-700">
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    {{-- <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Neil image"> --}}
                                </div>
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-base font-bold font-poppins truncate text-white">
                                        NPM
                                    </p>
                                    <p class="text-base font-poppins  truncate text-gray-400">
                                        2108107010000
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center ">
                                <div class="flex-shrink-0">
                                    {{-- <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="Bonnie image"> --}}
                                </div>
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-base font-bold font-poppins  truncate text-white">
                                        Nama
                                    </p>
                                    <p class="text-base font-poppins  truncatetext-gray-400">
                                        Fulan Bin Fulan
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    {{-- <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-2.jpg" alt="Michael image"> --}}
                                </div>
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-base font-bold font-poppins truncate text-white">
                                        Total Suara
                                    </p>
                                    <div id="calon2" class=" pt-3 text-center text-2xl font-poppins  text-white">
                                        
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- chart diagrag --}}
        <div id="chart" class=" w-[70%] h-[61vh] box-border py-[2vh] pt-5 ">
            <div id="chart1" style="transition: width 0.5s ease-in-out" class=""></div>
            <div id="chart2" style="transition: width 0.5s ease-in-out" class=""></div>
        </div>
    </div>
</div>


<div class=" overflow-x-auto shadow-md px-6 mt-10">
    <table class="w-full text-sm text-left rtl:text-right text-gray-400">
        <thead class="text-lg font-bold font-poppins uppercase bg-gray-700 text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Total Mahasiswa Informatika
                </th>
                <th scope="col" class="px-6 py-3">
                    Pemilih Terdaftar
                </th>
                <th scope="col" class="px-6 py-3">
                    Sudah Memilih
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class=" border-b font-poppins font-bold text-3xl h-[15vh] bg-gray-800 border-gray-700 hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 text-gray-400 whitespace-nowrap">
                    438
                </th>
                <td id="pendaftar" class="px-6 py-4">
                    
                </td>
                <td id="totalVote" class="px-6 py-4">
                    
                </td>
            </tr>
        </tbody>
    </table>
</div>

<script src="{{asset('src/sidebar.js')}}"></script>
<script>
        function fetchData() {
            $.ajax({
                url: '/get-real-time-data',
                type: 'GET',
                success: function (data) {
                    updateUI(data.totalVote1, data.totalVote2, data.persentaseVote1, data.persentaseVote2, data.totalSeluruhUser, data.totalSeluruhVote);
                    }
                });
            }

            function updateUI(jumlahVote1, jumlahVote2, persentase1, persentase2, pendaftarVote, totalVote) {
            const chart1 = document.getElementById('chart1');
            const chart2 = document.getElementById('chart2');
            const calon1 = document.getElementById('calon1');
            const calon2 = document.getElementById('calon2');
            const pendaftar = document.getElementById('pendaftar');
            const totalVoteSeluruh = document.getElementById('totalVote');
            // Membersihkan konten sebelum memasukkan yang baru
            
            calon1.innerHTML = '';
            calon2.innerHTML = '';
            
            
            chart1.classList.add('bg-gradient-to-r', 'from-pink-500', 'to-purple-600', 'h-[47.5%]','mb-10', 'font-poppins', 'font-bold', 'text-white', 'text-[3vw]', 'flex', 'justify-center', 'items-center', 'rounded-r-[2vh]');
            chart1.style.width = `${persentase1}%`;
            if(parseInt(persentase1, 10)>10){
                chart1.textContent = `${persentase1}%`;
            }
            else{
                chart2.innerHTML = '';
            }

            
            chart2.classList.add('bg-gradient-to-r','from-purple-600','to-pink-500', 'h-[47.5%]','font-poppins','font-bold','text-white', 'text-[3vw]', 'flex', 'justify-center', 'items-center', 'rounded-r-[2vh]');
            chart2.style.width = `${persentase2}%`;
            if(parseInt(persentase2,10)>10){
                chart2.textContent = `${persentase2}%`;
            }
            else{
                chart2.innerHTML = '';
            }

            calon1.textContent = jumlahVote1;
            calon2.textContent = jumlahVote2;
            pendaftar.textContent = pendaftarVote;
            totalVoteSeluruh.textContent = totalVote; 

        }

        fetchData();
        setInterval(fetchData, 5000); // Ambil data setiap 5 detik
</script>
    
</body>
</html>