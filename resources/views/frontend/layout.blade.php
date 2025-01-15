<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>គរុ</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="icon" href="{{ asset('frontend/image/logo.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- or -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Khmer&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton|Cabin|Lato|Fjalla+One|Montserrat|Roboto&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/69a9bab4e3.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Moul&family=Siemreap&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@0,100..700;1,100..700&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap');
    </style>
</head>

<body class="bg-white">
    <!-- nav start -->
    <nav class="bg-[#ffff] border-gray-200 shadow-md sticky top-0 z-50 px-4">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
            <a href="/" class="flex items-center">
                <img src="{{ asset('frontend/image/logo.png') }}" alt="Logo" class="w-[100px] h-[80px]">
            </a>
            <!-- Mobile menu button -->
            <button id="menu-button" type="button"
                class="inline-flex items-center p-2 w-8 h-8 justify-center text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <!-- Navbar links -->
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-2 md:p-0 mt-2 border border-[#006cb7] md:flex-row md:space-x-4 rtl:space-x-reverse md:mt-0 md:border-0">
                    <li>
                        <a href="/"
                            class="block font-gg py-3 px-2 text-[18px] {{ Request::is('/') ? 'text-[#006cb7]' : 'text-gray-500' }} hover:text-[#006cb7]">
                            សៀវភៅកិច្ចតែងការ
                        </a>
                    </li>
                    <li>
                        <a href="/worksheet"
                            class="block font-gg py-3 px-2 text-[18px] {{ Request::is('worksheet') ? 'text-[#006cb7]' : 'text-gray-500' }} hover:text-[#006cb7]">
                            សន្លឹកកិច្ចការ
                        </a>
                    </li>
                    <li class="relative group">
                        <a href="#"
                            class="block font-gg py-3 px-2 text-[18px] flex items-center space-x-1 {{ Request::is('video*') ? 'text-[#006cb7]' : 'text-gray-500' }}">
                            <span>វីដេអូ</span>
                            <i class="fa-solid fa-chevron-down text-xs"></i>
                        </a>
                        <!-- Dropdown menu -->
                        <ul id="service-dropdown"
                            class="absolute hidden group-hover:block bg-white border border-gray-200 shadow-lg rounded-sm w-48 z-10 py-3">
                            @foreach ($videoDocuments as $document)
                                <li>
                                    <a href="{{ route('video', $document->id) }}"
                                        class="block px-3 py-1 {{ Request::is('video/' . $document->id) ? 'bg-blue-500 text-white' : 'hover:bg-[#006cb7] hover:text-[#ffce27]' }}">
                                        {{ $document->title }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>


                </ul>
            </div>

        </div>
    </nav>

    <!-- nav end -->

    @yield('content')
    <!-- footer start-->
    <footer style="background-size: cover; background-position: center;" class="bg-book bg-[#006cb7]">
        <div class="max-w-screen-xl mx-auto py-9 p-4">
            <!-- 1 Row, 3 Columns Grid Layout -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <!-- Column 1: Logo and Description -->
                <div class="p-2">
                    <div>
                        <img src="{{ asset('frontend/image/logo_footer.png') }}" alt="Logo"
                            class="w-[100px] h-[100px]">
                    </div>
                    <p class="mt-2 text-white hover:text-gray-200 text-[15px]">
                        វីដេអូ និងឯកសារទាំងអស់ដែលផ្សព្វផ្សាយនៅលើវេបសាយនេះ ជាការផលិតដោយនាយកដ្ឋានជំនាញ
                        និងគ្រឹះស្ថានសិក្សាជាដៃគូ នៃមជ្ឈមណ្ឌលសម្រាប់ការអប់រំឌីជីថល និងការអប់រំពីចម្ងាយ។
                        គ្មានស្ថាប័នណាមានសិទ្ធិចម្លងយកទៅប្រើប្រាស់បន្ត
                        ដោយពុំឆ្លងកាត់ការអនុញ្ញាតពីមជ្ឈមណ្ឌលនៃក្រសួងអប់រំជាដាច់ខាត។
                    </p>
                </div>
                <!-- Column 3: Social Media Links -->
                <div class="p-2">
                    <h2 class="text-lg font-bold text-white">កិច្ចតែងការ</h2>
                    <p class="mt-2 flex items-center space-x-2">
                        <a href="#" class="flex items-center space-x-3">
                            <i class='bx bxs-right-arrow text-white'></i>
                            <span class="text-white hover:text-gray-200 text-[15px]">សៀវភៅកិច្ចតែងការ</span>
                        </a>
                    </p>
                    <p class="mt-2 flex items-center space-x-2">
                        <a href="#" class="flex items-center space-x-3">
                            <i class='bx bxs-right-arrow text-white'></i>
                            <span class="text-white hover:text-gray-200 text-[15px]">សន្លឹកកិច្ចការ</span>
                        </a>
                    </p>
                </div>
                <div class="p-2">
                    <h2 class="text-lg font-bold text-white">វីដេអូ</h2>
                    <p class="mt-2 flex items-center space-x-2">
                        <a href="#" class="flex items-center space-x-3">
                            <i class='bx bxs-right-arrow text-white'></i>
                            <span class="text-white hover:text-gray-200 text-[15px]">យុទ្ធវីធី</span>
                        </a>
                    </p>
                    <p class="mt-2 flex items-center space-x-2">
                        <a href="#" class="flex items-center space-x-3">
                            <i class='bx bxs-right-arrow text-white'></i>
                            <span class="text-white hover:text-gray-200 text-[15px]">វិធីសាស្រ្ត</span>
                        </a>
                    </p>
                    <p class="mt-2 flex items-center space-x-2">
                        <a href="#" class="flex items-center space-x-3">
                            <i class='bx bxs-right-arrow text-white'></i>
                            <span class="text-white hover:text-gray-200 text-[15px]">ល្បែងថាមពល</span>
                        </a>
                    </p>
                    <p class="mt-2 flex items-center space-x-2">
                        <a href="#" class="flex items-center space-x-3">
                            <i class='bx bxs-right-arrow text-white'></i>
                            <span class="text-white hover:text-gray-200 text-[15px]">ល្បែងសឹក្សា</span>
                        </a>
                    </p>
                </div>
                <div class="p-2">
                    <h2 class="text-lg font-bold text-white">ទំនាក់ទំនង</h2>
                    <p class="mt-2 flex items-center space-x-2">
                        <a href="#"
                            class="bg-[#fff] hover:bg-[#06b5d4b6] text-[#006cb7] hover:text-[#fff] py-2 px-3 rounded-tl-2xl rounded-tr-2xl rounded-br-2xl">
                            <i class="fa-solid fa-location-dot"></i>
                        </a>
                        <a href="#" class="text-white hover:text-gray-200 text-[15px]">Address: 10th Floor,
                            Business
                            Development Center (BDC), OCIC Blvd, Chroy Changvar, Phnom Penh</a>
                    </p>
                    <p class="mt-2 flex items-center space-x-2">
                        <a href="#"
                            class="bg-[#fff] hover:bg-[#06b5d4b6] text-[#006cb7] hover:text-[#fff] py-2 px-3 rounded-tl-2xl rounded-tr-2xl rounded-br-2xl">
                            <i class="fa-solid fa-phone"></i>
                        </a>
                        <a href="#" class="text-white hover:text-gray-200text-[15px]">លេខទូរស័ព្ទ: (+855)
                            73920200</a>
                    </p>
                    <p class="mt-2 flex items-center space-x-2">
                        <a href="#"
                            class="bg-[#fff] hover:bg-[#06b5d4b6] text-[#006cb7] hover:text-[#fff] py-2 px-3 rounded-tl-2xl rounded-tr-2xl rounded-br-2xl">
                            <i class="fa-regular fa-envelope "></i>
                        </a>
                        <a href="#" class="text-white hover:text-gray-200text-[15px]">អ៊ីមែល:
                            info@example.com</a>
                    </p>

                </div>
            </div>
            <div
                class="mt-8 border-t border-gray-200 dark:border-gray-300 pt-4 text-sm flex justify-between items-center">
                <span class="text-gray-300 ">Copyright 2024 Duraseksa - រក្សាសិទ្ធិគ្រប់យ៉ាង | Privacy Policy</span>
                <div class="flex space-x-4">
                    <a href="#"
                        class="bg-[#fff] hover:bg-[#06b5d4b6] text-[#006cb7] hover:text-[#fff] py-2 px-3 rounded-tl-2xl rounded-tr-2xl rounded-br-2xl">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="#"
                        class="bg-[#fff] hover:bg-[#06b5d4b6] text-[#006cb7] hover:text-[#fff] py-2 px-3 rounded-tl-2xl rounded-tr-2xl rounded-br-2xl">
                        <i class='bx bxl-instagram'></i>
                    </a>
                    <a href="#"
                        class="bg-[#fff] hover:bg-[#06b5d4b6] text-[#006cb7] hover:text-[#fff] py-2 px-3 rounded-tl-2xl rounded-tr-2xl rounded-br-2xl">
                        <i class='bx bxl-linkedin'></i>
                    </a>
                    <a href="#"
                        class="bg-[#fff] hover:bg-[#06b5d4b6] text-[#006cb7] hover:text-[#fff] py-2 px-3 rounded-tl-2xl rounded-tr-2xl rounded-br-2xl">
                        <i class='bx bxl-youtube'></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>


    <!-- jQuery for additional plugins -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- JavaScript for menu toggle -->
    <script>
        document.getElementById('menu-button').addEventListener('click', function() {
            const navbar = document.getElementById('navbar-default');
            navbar.classList.toggle('hidden');
        });

        // Dropdown menu toggle
        document.getElementById('service-toggle').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default link behavior
            const dropdown = document.getElementById('service-dropdown');
            dropdown.classList.toggle('hidden'); // Toggle dropdown visibility
        });
    </script>

    <script>
        AOS.init();
    </script>
</body>

</html>
