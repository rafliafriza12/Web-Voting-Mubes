<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Voting</title>
    <style>
      .animasi {
        position: absolute;
        inset: 16% 0 0;
        width: 300px;
        height: 300px;
        background: linear-gradient(to right, #fuchsia, #800080);
        filter: blur(100px);
        transform: scaleY(1.5);
        opacity: 1;
        z-index: -100;
        border-radius: 50%;
        animation: borderRadiusAnimation 3s infinite;
        transition: border-radius 3s ease-in-out;
      }

      @keyframes floatAnimation {
        0%, 100% {
          transform: translate(0, 0);
        }
        20% {
          transform: translate(20px, -40px);
        }
        40% {
          transform: translate(80px, 40px);
        }
        60% {
          transform: translate(-20px, 40px);
        }
        80% {
          transform: translate(-40px, -20px);
        }
      }
  
      @keyframes colorMovement {
        0% {
          background-position: 0% 50%;
        }
        25% {
          background-position: 50% 0%;
        }
        50% {
          background-position: 100% 50%;
        }
        75% {
          background-position: 50% 100%;
        }
        100% {
          background-position: 0% 50%;
        }
      }
  
      @keyframes borderRadiusAnimation {
        0% {
          border-radius: 36% 64% 58% 42% / 53% 0% 100% 47% ;
        }
        25% {
          border-radius: 38% 62% 90% 10% / 31% 71% 29% 69% ;
        }
        50% {
          border-radius: 61% 39% 74% 26% / 31% 71% 29% 69% ;
        }
        75% {
          border-radius: 27% 73% 0% 100% / 31% 71% 29% 69% ;
        }
        100% {
          border-radius: 36% 64% 58% 42% / 53% 0% 100% 47%;
        }
      }
    </style>
</head>
<body class=" relative bg-gray-900">
    <div class=" overflow-hidden w-screen">
      <div aria-hidden="true" class="animasi absolute inset-y-16 inset-x-0 w-[50vh] h-[50vh] rounded-[50%]  bg-gradient-to-b from-pink-500 to-purple-600 blur-[150px] mx-auto my-auto scale-y-150 opacity-[0.6] z-[-100]"></div>
    </div>
    @include('sidebar')
    <div class="w-screen flex flex-col mt-[80px] gap-[10vh] items-center px-[10vw] py-[3vh]
                sm:flex-col 
                md:flex-row md:h-screen md:items-center md:justify-evenly md:mt-[0]">
        <div class="max-w-sm border  rounded-lg shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] bg-gray-800 border-gray-700 duration-[0.5s]
                    hover:scale-[1.03]">
            <img class="rounded-t-lg" src="{{url('img/ganjar.png')}}" alt="" />
            <div class="p-5 text-center">
                <h5 class="mb-2 text-[40px] font-bold tracking-tight text-white">01</h5>
                <h5 class="mb-[3vh] text-2xl font-bold tracking-tight text-white">Fulan Bin Fulan</h5>
                @if(auth()->user()->vote==null)
                <button id="vote1" class=" bg-blue-700 text-white text-[17px] font-poppins font-semibold py-[1vh] w-[100px] rounded-lg hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <p>Vote</p>
                </button>
                @endif
            </div>
        </div>
        <div class="max-w-sm  borderrounded-lg shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] bg-gray-800 border-gray-700 duration-[0.5s]
                    hover:scale-[1.03]">
            <img class="rounded-t-lg" src="{{url('img/ganjar.png')}}" alt="" />
            <div class="p-5 text-center">
                <h5 class="mb-2 text-[40px] font-bold tracking-tight text-white">02</h5>
                <h5 class="mb-[3vh] text-2xl font-bold tracking-tight text-white">Fulan Bin Fulan</h5>
                @if(auth()->user()->vote==null)
                <button id="vote2" class=" bg-blue-700 text-white text-[17px] font-poppins font-semibold py-[1vh] w-[100px] rounded-lg hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <p>Vote</p>
                </button>
                @endif
            </div>
        </div>
        
    </div>

    <div class="hidden" id="confirm-vote1">
        <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
            <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
              <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                  <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                      <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-[#D0F8E8] sm:mx-0 sm:h-10 sm:w-10">
                        <svg class="h-6 w-6 text-[#06CD7D]" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                        </svg>
                      </div>
                      <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                        <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">SETUJUI PILIHAN ANDA</h3>
                        <div class="mt-2">
                          <p class="text-sm text-gray-500">Ikuti kata hati anda dalam memilih kandidat ketua himpunan periode 2024/2025, dikarenakan 
                            pilihan anda menentukan keberhasilan HMIF dalam kepengengurusan periode 2024/2025
                          </p>
                          <p class="mt-[5px] text-gray-500">APAKAH ANDA YAKIN DENGAN PILIHAN ANDA ?</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <form method="POST" action="{{Route('vote')}}">
                      @csrf
                      <input type="hidden" name="npm" value="{{auth()->user()->npm}}">
                      <input type="hidden" name="vote" value="{{1}}">
                      <button type="submit" id="agreement1" class="inline-flex w-full justify-center rounded-md bg-[#06CD7D] px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-[#44BD82] sm:ml-3 sm:w-auto">Yakin</button>
                    </form>
                    <button id="closeOverlay1" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Batal</button>
                  </div>
                </div>
              </div>
            </div>
          </div>        
    </div>

    <div class="hidden" id="confirm-vote2">
      <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
          <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
          <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
              <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                  <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-[#D0F8E8] sm:mx-0 sm:h-10 sm:w-10">
                      <svg class="h-6 w-6 text-[#06CD7D]" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                      </svg>
                    </div>
                    <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                      <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">SETUJUI PILIHAN ANDA</h3>
                      <div class="mt-2">
                        <p class="text-sm text-gray-500">Ikuti kata hati anda dalam memilih kandidat ketua himpunan periode 2024/2025, dikarenakan 
                          pilihan anda menentukan keberhasilan HMIF dalam kepengengurusan periode 2024/2025
                        </p>
                        <p class="mt-[5px] text-gray-500">APAKAH ANDA YAKIN DENGAN PILIHAN ANDA ?</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                  <form method="POST" action="{{Route('vote')}}">
                    @csrf
                    <input type="hidden" name="npm" value="{{auth()->user()->npm}}" readonly>
                    <input type="hidden" name="vote" value="{{2}}" readonly>
                    <button type="submit" id="agreement2" class="inline-flex w-full justify-center rounded-md bg-[#06CD7D] px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-[#44BD82] sm:ml-3 sm:w-auto">Yakin</button>
                  </form>
                  <button id="closeOverlay2" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Batal</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>

      <div style="display: {{auth()->user()->vote == null ? 'none' : ''}}" id="">
        <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
            <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
              <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                  <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                      <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-[#D0F8E8] sm:mx-0 sm:h-10 sm:w-10">
                        <svg class="h-6 w-6 text-[#06CD7D]" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                        </svg>
                      </div>
                      <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                        <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">TERIMA KASIH TELAH MEMILIH</h3>
                        <div class="mt-2">
                          {{-- <p class="text-sm text-gray-500">Ikuti kata hati anda dalam memilih kandidat ketua himpunan periode 2024/2025, dikarenakan 
                            pilihan anda menentukan keberhasilan HMIF dalam kepengengurusan periode 2024/2025
                          </p> --}}
                          <p class="mt-[5px] text-gray-500">Semoga pilihan anda amanah dan membawa kemajuan bagi Himpunan Mahasiswa Informatika USK. Kami harap pilihan anda berdasarkan kehendak hati tanpa ada pengaruh dari pihak manapun</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>   
      </div>

      <div id="sesi">
        <div class="relative z-10 " aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
            <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
              <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                  <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                      <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                        <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                        </svg>
                      </div>
                      <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                        <h3 class="text-base font-semibold leading-6 text-gray-900" id="title">SESI VOTE BELUM DI BUKA</h3>
                        <div class="mt-2">                          
                        <p id="jam" class="mt-[5px] text-gray-500 text-3xl font-semibold"></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>   
      </div>
      <script>
        const sesi = document.getElementById('sesi');
        sesi.classList.add('hidden');
        
        
        // Fungsi untuk menghitung sisa waktu dan memperbarui tampilan
        const hitungMundur = () => {
          const waktuTarget = new Date("2023-12-17T14:00:00").getTime();
          const waktuTutup = new Date("2023-12-17T20:00:00").getTime();
          const modalTitle = document.getElementById('title');
          const jamContainer = document.getElementById('jam');
          const waktuSekarang = new Date().getTime();
          const selisihWaktu = waktuTarget - waktuSekarang;

          // console.log(waktuTutup)
          // console.log(waktuSekarang);
          console.log(waktuTutup-waktuSekarang);

          if (selisihWaktu > 0) {
            sesi.classList.remove('hidden');
            const hari = Math.floor(selisihWaktu / (1000 * 60 * 60 * 24));
            const jam = Math.floor((selisihWaktu % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const menit = Math.floor((selisihWaktu % (1000 * 60 * 60)) / (1000 * 60));
            const detik = Math.floor((selisihWaktu % (1000 * 60)) / 1000);

            jamContainer.textContent = `${hari} : ${jam} : ${menit} : ${detik}`;
          }
          else if(waktuTutup - waktuSekarang <= 0){
            sesi.classList.remove('hidden');
            modalTitle.innerHTML = '';
            modalTitle.innerHTML = 'SESI VOTE SUDAH DITUTUP';
            jamContainer.innerHTML = '';
          }
          else {
            sesi.classList.add('hidden');
          }
        }

        // Memperbarui setiap detik
        setInterval(hitungMundur, 1000);

      </script>
    <script src="{{asset('src/index.js')}}"></script>
    <script src="{{asset('src/sidebar.js')}}"></script>
</body>
</html>