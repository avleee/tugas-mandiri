<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tugas Elva</title>
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>   
<body class=" bg-teal-100">
    {{-- Navbar Start --}}
        <nav class="bg-[#64CCDA] border-gray-200 dark:bg-gray-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="img/Logo Panjang Putih.png" class="h-8" alt="" />       
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-teal-400 rounded-lg bg-[#64CCDA] md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg- dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Blog</a>
                    </li>
                <li>
                <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Help</a>
                </li>
                <li>
                <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                    </svg>
                    
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    
                </li>
            </ul>
            </div>
            </div>
        </nav>
    {{-- Navbar End --}}

    {{-- Card Start--}}
        <div class="grid grid-cols-3 gap-4 px-4 py-8">
            <div class=""></div>
                <div class="bg-white p-5 rounded-xl shadow-lg shadow-gray-400">
                    <div class="grid grid-cols-1">
                        <div class="text-center font-bold">Bayar DP</div>
                        <div class="flex justify-between text-xs">
                            <div class="">Ngabring.id</div> 
                            <div class="">Kode Pesanan. 00xxxx1</div>
                        </div>
                        <div class="flex justify-start text-xs mt-2">
                            <div class="h-12 w-12">
                                <img src="img/Foto Konten.png" alt="">
                            </div>
                            <div class="content-center ml-2">Judul Paket</div>
                        </div>
                        <div class="mt-2">
                            <div class="grid grid-rows-4 grid-flow-col gap-0 text-xs">
                                <div class=" flex">
                                    <p>Tanggal Berangkat</p>
                                    <p class=" mx-2">&nbsp;&nbsp;&nbsp;:</p>
                                    <p>30 Jan - 3 Feb 2024</p>
                                </div>
                                <div class="flex">
                                    <p>Jumlah Orang</p>
                                    <p class="mx-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
                                    <p>30</p>
                                </div>
                                <div class=" flex w-full">
                                    <p>Alamat Jemput</p>
                                    <p class=" mx-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
                                    <input type="text" class=" w-50 h-7 my-1 ml-1 bg-slate-100 text-black p-3 rounded-lg focus: outline-none focus: ring-gray-200 focus: ring-1 focus: border-gray-200">
                                </div>                          
                                <div class=" flex w-full">
                                    <p>Tambahkan Patokan </p>
                                    <p class=" mx-2">&nbsp;:</p>
                                    <input type="text" class=" w-50 h-7 my-1 ml-1 bg-slate-100 text-black p-3 rounded-lg focus: outline-none focus: ring-gray-200 focus: ring-1 focus: border-gray-200">
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 border-t border-gray-900 "></div>      
                            <div class="text-xs mt-4 mb-2">
                                Pastikan anda sudah mengisi form tiket dengan baik dan benar
                            </div>
                            <div class="mt-3 border-t border-gray-900 "></div>
                            <div class="text-sm font-semibold mt-4 mb-4">
                                Pilih metode pembayaran
                            </div>                     
                                <span class="bg-gray-400 text-black text-xs font-bold me-2 px-2.5 py-0.5 w-16 rounded-lg dark:bg-gray-700 dark:text-gray-300 underline">Transfer</span>
                            </div>
                            <div class="grid grid-rows-4 grid-flow-col gap-2 mt-4 text-xs">
                                <div class="flex">
                                    <p class="mr-3 font-semibold">Pilih Bank :</p>
                                    <div class="flex items-center mb-4">
                                       <input id="default-radio" type="radio" value="" name="default-radio" class="w-4 h-4 ml-2 text-black border-gray-400 bg-gray-400 focus:ring-white">
                                       <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        <img src="img/Foto Konten.png" class="w-5 h-5 ml-2" alt="">
                                       </label>
                                       <p class="font-semibold ml-2">BCA</p>
                                    </div>                                  
                                </div>
                                <div class="flex">
                                    <div class="flex items-center mb-4">
                                        <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 ml-20 text-black border-gray-400 bg-gray-400 focus:ring-white">
                                        <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            <img src="img/Foto Konten.png" class="w-5 h-5 ml-2" alt="">
                                        </label>
                                        <p class="font-semibold ml-2">BRI</p>
                                    </div>                                  
                                </div>
                                <div class=" flex">
                                    <div class="flex items-center mb-4">
                                        <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 ml-20 text-black border-gray-400 bg-gray-400 focus:ring-white">
                                        <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                                            <img src="img/Foto Konten.png" class="w-5 h-5 ml-2" alt="">
                                        </label>
                                        <p class="font-semibold ml-2">BSI</p>
                                    </div>                                   
                                </div>                          
                                <div class="flex">
                                    <div class="flex items-center mb-4">
                                        <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 ml-20 text-black border-gray-400 bg-gray-400 focus:ring-white">
                                        <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            <img src="img/Foto Konten.png" class="w-5 h-5 ml-2" alt="">
                                        </label>
                                        <p class="font-semibold ml-2">Mandiri</p>
                                    </div>
                                </div>
                        </div>
                        <div class="mt-3 border-t border-gray-900 "></div>
                        <div class="grid grid-rows-3 grid-flow-col gap-4 text-xs justify-end justify-items-end mt-1">
                            <div>Subtotal</div>
                            <div>Biaya Layanan</div>
                            <div>Total Pembayaran</div>
                            <div>150.000</div>
                            <div>50.000</div>
                            <div>200.000</div>
                          </div>
                         <div class="grid grid-cols-1 gap-4 justify-items-center mt-12">                    
                            <div class=""><button type="button" class="text-white bg-[#FFB085] hover:bg-opacity-80 focus:ring-4 font-medium font-sans rounded-xl text-sm px-5 py-2.5 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Buat Pesanan</button>
                            </div>                            
                         </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- Card End --}}

    {{-- Footer Start--}}
        <footer class="bg-black pt-20 pb-10">
            <div class="grid grid-cols-4 mx-auto w-full max-w-screen">
                <div class="bg-[var(-background-font,#0C0C0C)] flex flex-row p-[3.4rem_0_7.5rem_8.3rem] w-[90rem] box-sizing-border">
                    <div class="w-full px-4 mb-12 text-white font-medium md:w-1/3">
                        <img src="img/Logo Panjang.png" class="m-5 h-12" alt="">
                        <p class="ml-5 text-based font-normal ">
                            Ngabring.id adalah penyedia layana
                        </p>
                        <p class="ml-5 text--based font-normal">
                            Penyelenggara tour agen yang mulai
                        </p>
                        <p class="ml-5 text--based font-normal">
                            Bergerak di kabupaten tasikmalaya
                        </p>
                    </div>
                    <div class="m-[0_7.8rem_0_0] flex flex-col items-center box-sizing-border">
                        <div class="m-[0_0.8rem_1.9rem_0.8rem] inline-block break-words font-['Sans Serif'] font-semibold text-[1rem] text-[#FFFFFF]">
                        Ikuti kami di
                        </div>
                        <div class="flex flex-col items-center w-[fit-content] box-sizing-border">
                            <div class="m-[0_0.2rem_1.6rem_0] flex flex-row w-[fit-content] box-sizing-border">
                                <a href="https://tiktok.com/pinapin14"
                                target="_blank" class="w-9 h-9 mr-3 rounded-full flex
                                justify-center items-center border-slate-300 text-slate-300
                                 hover:border-primary
                                 hover:bg-primary hover:text-white">
                                 <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>TikTok</title><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                                </a>
                              <span class="break-words font-['Sans Serif'] font-medium text-[0.9rem] text-[#FFFFFF] py-2 mx-1">
                              @Ngabring.id
                              </span>
                            </div>
                          <div class="m-[0_0.2rem_1.6rem_0] flex flex-row w-[fit-content] box-sizing-border">
                            <a href="https://instagram.com/alpin_su"
                            target="_blank" class="w-9 h-9 mr-3 rounded-full flex
                            justify-center items-center border-slate-300 text-slate-300
                             hover:border-primary
                             hover:bg-primary hover:text-white">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"/></svg>
                            </a>
                          <span class="break-words font-['Sans Serif'] font-medium text-[0.9rem] text-[#FFFFFF] py-2 mx-1">
                          @Ngabring.id
                          </span>
                        </div>
                        <div class="m-[0_0.2rem_1.6rem_0] flex flex-row w-[fit-content] box-sizing-border">
                            <a href="https://instagram.com/alpin_su"
                            target="_blank" class="w-9 h-9 mr-3 rounded-full flex
                            justify-center items-center border-slate-300 text-slate-300
                             hover:border-primary
                             hover:bg-primary hover:text-white">
                             <svg role="img"  width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Threads</title><path d="M12.186 24h-.007c-3.581-.024-6.334-1.205-8.184-3.509C2.35 18.44 1.5 15.586 1.472 12.01v-.017c.03-3.579.879-6.43 2.525-8.482C5.845 1.205 8.6.024 12.18 0h.014c2.746.02 5.043.725 6.826 2.098 1.677 1.29 2.858 3.13 3.509 5.467l-2.04.569c-1.104-3.96-3.898-5.984-8.304-6.015-2.91.022-5.11.936-6.54 2.717C4.307 6.504 3.616 8.914 3.589 12c.027 3.086.718 5.496 2.057 7.164 1.43 1.783 3.631 2.698 6.54 2.717 2.623-.02 4.358-.631 5.8-2.045 1.647-1.613 1.618-3.593 1.09-4.798-.31-.71-.873-1.3-1.634-1.75-.192 1.352-.622 2.446-1.284 3.272-.886 1.102-2.14 1.704-3.73 1.79-1.202.065-2.361-.218-3.259-.801-1.063-.689-1.685-1.74-1.752-2.964-.065-1.19.408-2.285 1.33-3.082.88-.76 2.119-1.207 3.583-1.291a13.853 13.853 0 0 1 3.02.142c-.126-.742-.375-1.332-.75-1.757-.513-.586-1.308-.883-2.359-.89h-.029c-.844 0-1.992.232-2.721 1.32L7.734 7.847c.98-1.454 2.568-2.256 4.478-2.256h.044c3.194.02 5.097 1.975 5.287 5.388.108.046.216.094.321.142 1.49.7 2.58 1.761 3.154 3.07.797 1.82.871 4.79-1.548 7.158-1.85 1.81-4.094 2.628-7.277 2.65Zm1.003-11.69c-.242 0-.487.007-.739.021-1.836.103-2.98.946-2.916 2.143.067 1.256 1.452 1.839 2.784 1.767 1.224-.065 2.818-.543 3.086-3.71a10.5 10.5 0 0 0-2.215-.221z"/></svg>
                            </a>
                          <span class="break-words font-['Sans Serif'] font-medium text-[0.9rem] text-[#FFFFFF] py-2 mx-1">
                          @Ngabring.id
                          </span>
                        </div>
                        </div>
                      </div>
        
                      <div class="flex flex-col items-center box-sizing-border">
                        <div class="m-[0_0_1.9rem_0] inline-block break-words font-['Sans Serif'] font-semibold text-[1rem] text-[#FFFFFF]">
                        Lainnya
                        </div>
                        <div class="m-[0_0.5rem_0_0.5rem] flex flex-col items-center w-[fit-content] box-sizing-border">
                          <div class="m-[0_0.6rem_1.6rem_0] flex box-sizing-border">
                            <span class="break-words font-['Sans Serif'] font-medium text-[0.9rem] text-[#FFFFFF]">
                            Help
                            </span>
                          </div>
                          <div class="m-[0_0_1.6rem_0] flex box-sizing-border">
                            <span class=" my-5 break-words font-['Sans Serif'] font-medium text-[0.9rem] text-[#FFFFFF]">
                            About
                            </span>
                          </div>
                          <div class="m-[0_0.7rem_0_0] flex box-sizing-border">
                            <span class="break-words font-['Sans Serif'] font-medium text-[0.9rem] text-[#FFFFFF]">
                            Blog
                            </span>
                        </div>
                    </div>
                 </div>
               </div>
            </div>
        </footer>
    {{-- Footer End --}}            
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>
</html>