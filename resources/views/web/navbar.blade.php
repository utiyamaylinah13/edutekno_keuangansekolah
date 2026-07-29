<nav class="fixed top-0 left-0 right-0 z-50 bg-white border-b border-gray-200 shadow-sm">

    <div class="max-w-7xl mx-auto px-5 py-2 ">

        <div class="flex items-center justify-between h-16">

            {{-- Logo --}}
            <a href="/" class="flex items-center gap-6">

                <img src="{{asset('assets/images/logo.png') }}"
                    alt="logo"
                    class="h-14 w-auto">

                <div>
                    <h1 class="text-4xl font-bold bg-gradient-to-r from-sky-400 via-blue-600 to-indigo-900 bg-clip-text text-transparent">
                        MitraKeuangan
                    </h1>
                </div>

            </a>
            <button
            id="menu-btn"
            class="block lg:hidden text-gray-700">

            <svg xmlns="http://www.w3.org/2000/svg"
                class="w-8 h-8"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">

                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"/>

            </svg>
            </button>


            {{-- Menu --}}
            <ul class="hidden lg:flex items-center gap-8">

                <li>
                    <a href="#home"
                        class="text-gray-700 hover:text-blue-600 font-medium transition duration-300">
                        Home
                    </a>
                </li>

                <li class="relative group">

                    <a href="#"
                        class="flex items-center gap-1 text-gray-700 hover:text-blue-600 font-medium">

                        Profil

                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">

                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M19 9l-7 7-7-7"/>

                        </svg>

                    </a>

                    <div
                        class="absolute left-0 mt-4 w-56 bg-white rounded-xl shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">

                        <a href="#" class="block px-5 py-3 hover:bg-blue-50">
                            Tentang Kami
                        </a>

                        <a href="#" class="block px-5 py-3 hover:bg-blue-50">
                            Legalitas Perusahaan
                        </a>

                        <a href="#" class="block px-5 py-3 hover:bg-blue-50">
                            Rekening Perusahaan
                        </a>
                        <a href="#" class="block px-5 py-3 hover:bg-blue-50">
                            Testimoni
                        </a>

                    </div>

                </li>

                <li class="relative group">

                    <a href="#"
                        class="flex items-center gap-1 text-gray-700 hover:text-blue-600 font-medium">

                        Layanan

                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">

                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M19 9l-7 7-7-7"/>

                        </svg>

                    </a>

                    <div
                        class="absolute left-0 mt-4 w-56 bg-white rounded-xl shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">

                        <a href="#" class="block px-5 py-3 hover:bg-blue-50">
                            Aplikasi Keuangan Digital
                        </a>

                        <a href="#" class="block px-5 py-3 hover:bg-blue-50">
                            Pembayaran 
                        </a>

                        <a href="#" class="block px-5 py-3 hover:bg-blue-50">
                            Tagihan
                        </a>

                    </div>

                </li>

                <li class="relative group">

                    <a href="#"
                        class="flex items-center gap-1 text-gray-700 hover:text-blue-600 font-medium">

                        Pemesanan

                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">

                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M19 9l-7 7-7-7"/>

                        </svg>

                    </a>

                    <div
                        class="absolute left-0 mt-4 w-56 bg-white rounded-xl shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">

                        <a href="#" class="block px-5 py-3 hover:bg-blue-50">
                            Cara  pemesanan
                        </a>

                        <a href="#" class="block px-5 py-3 hover:bg-blue-50">
                            Cara Pembayaran
                        </a>

                        <a href="#" class="block px-5 py-3 hover:bg-blue-50">
                            Konfirmasi Pembayaran
                        </a>

                    </div>

                </li>

                
                <li>
                    <a href="#blog"
                        class="text-gray-700 hover:text-blue-600 font-medium transition duration-300">
                        Blog
                    </a>
                </li>

                <li class="relative group">

                    <a href="#"
                        class="flex items-center gap-1 text-gray-700 hover:text-blue-600 font-medium">

                        Bantuan

                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">

                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M19 9l-7 7-7-7"/>

                        </svg>

                    </a>

                    <div
                        class="absolute left-0 mt-4 w-56 bg-white rounded-xl shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">

                        <a href="#" class="block px-5 py-3 hover:bg-blue-50">
                            FAQ
                        </a>

                        <a href="#" class="block px-5 py-3 hover:bg-blue-50">
                            Kontak Kami
                        </a>

                        <a href="#" class="block px-5 py-3 hover:bg-blue-50">
                            Webinar
                        </a>

                    </div>

                </li>

            </ul>   

            {{-- Button --}}
            <div class="hidden lg:flex items-center gap-4">
                <a href="#"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-7 py-3 rounded-xl font-semibold transition duration-300 shadow-md">
                    Hubungi Kami
                </a>

            </div>

        </div>

    </div>
</nav>