@extends('frontend.layout')
@section('content')
    <section id="bg-header" class="bg-cover bg-center py-24"
        style="background-image: url('{{ asset('frontend/image/bg_book.png') }}');">
        <div class="max-w-screen-xl mx-auto text-center text-white">
            <h2 class="text-[20px] font-bold text-[#006cb7]">
                សូមស្វាគមន៍ទៅកាន់ផ្នែកសន្លឹកកិច្ចការ
            </h2>
            <p class="text-sm mt-1 text-[#006cb7]">ស្វែងរកសន្លឹកកិច្ចការ</p>
        </div>
    </section>
    <!-- =================== Start ============= -->
    <div class="py-10" style="background-image: url('{{ asset('frontend/image/bg_image.png') }}');">
        <section class="max-w-screen-xl mx-auto text-center p-4 mt-5">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <p class="text-[22px] text-start text-[#006cb7] font-bold">
                        <i class="fa-solid fa-file-lines ml-1 text-[20px] text-[#006cb7]"></i>
                        សន្លឹកកិច្ចការ
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-5">
                <div data-aos="zoom-in" data-aos-duration="1500"
                    class="bg-white rounded-tl-3xl rounded-tr-3xl rounded-br-3xl shadow-md overflow-hidden">
                    <div class="p-4">
                        <img src="{{ asset('frontend/image/book/book.jpg') }}" alt="Document Cover"
                            class="w-full h-auto object-cover rounded-t-lg transition-transform duration-500 ease-in-out transform hover:scale-105" />
                        <div class="mt-4">
                            <a href="book/detail"
                                class="group px-3 py-1.5 text-[15px] text-[#4d4d4d] rounded-tl-xl rounded-tr-xl rounded-br-xl flex items-center">
                                <i class="fa-regular fa-clock text-[12px] text-[#006cb7] mr-1"></i> 2024-04-12
                            </a>
                            <h2 class="text-[18px] font-medium mt-2">
                                សៀវភៅកិច្ចតែងការថ្នាក់ទី៧
                            </h2>
                        </div>
                        <div class="flex items-center justify-between mt-3 space-x-3">
                            <a href="{{ asset('frontend/image/sheet/2018.pdf') }}" target="_blank"
                                class="group px-3 py-1.5 text-[15px] text-[#fff] rounded-tl-xl rounded-tr-xl rounded-br-xl border border-[#006cb7] hover:text-[#fff] bg-[#006cb7] hover:bg-[#006bb7cc] flex items-center">
                                <i class="fa-solid fa-download text-[12px] text-[#fff] mr-1 group-hover:text-[#fff]"></i>
                                ទាញយក
                            </a>
                            <a href="book/detail"
                                class="group px-3 py-1.5 text-[15px] text-[#006cb7] rounded-tl-xl rounded-tr-xl rounded-br-xl bg-transparent border border-[#006cb7] hover:text-[#fff] hover:bg-[#006cb7] flex items-center">
                                <i class="fa-solid fa-eye text-[12px] text-[#006cb7] mr-1 group-hover:text-[#fff]"></i>
                                មើលជាមុន
                            </a>
                        </div>


                    </div>
                </div>

                <div data-aos="zoom-in" data-aos-duration="1500"
                    class="bg-white rounded-tl-3xl rounded-tr-3xl rounded-br-3xl shadow-md overflow-hidden">
                    <div class="p-4">
                        <img src="{{ asset('frontend/image/book/book1.png') }}" alt="Document Cover"
                            class="w-full h-auto object-cover rounded-t-lg transition-transform duration-500 ease-in-out transform hover:scale-105" />
                        <div class="mt-4">
                            <a href="book/detail"
                                class="group px-3 py-1.5 text-[15px] text-[#4d4d4d] rounded-tl-xl rounded-tr-xl rounded-br-xl flex items-center">
                                <i class="fa-regular fa-clock text-[12px] text-[#006cb7] mr-1"></i> 2024-04-12
                            </a>
                            <h2 class="text-[18px] font-medium mt-2">
                                សៀវភៅកិច្ចតែងការថ្នាក់ទី៨
                            </h2>
                        </div>
                        <div class="flex items-center justify-between mt-3 space-x-3">
                            <a href="{{ asset('frontend/image/sheet/2018.pdf') }}" target="_blank"
                                class="group px-3 py-1.5 text-[15px] text-[#fff] rounded-tl-xl rounded-tr-xl rounded-br-xl border border-[#006cb7] hover:text-[#fff] bg-[#006cb7] hover:bg-[#006bb7cc] flex items-center">
                                <i class="fa-solid fa-download text-[12px] text-[#fff] mr-1 group-hover:text-[#fff]"></i>
                                ទាញយក
                            </a>
                            <a href="book/detail"
                                class="group px-3 py-1.5 text-[15px] text-[#006cb7] rounded-tl-xl rounded-tr-xl rounded-br-xl bg-transparent border border-[#006cb7] hover:text-[#fff] hover:bg-[#006cb7] flex items-center">
                                <i class="fa-solid fa-eye text-[12px] text-[#006cb7] mr-1 group-hover:text-[#fff]"></i>
                                មើលជាមុន
                            </a>
                        </div>


                    </div>
                </div>

                <div data-aos="zoom-in" data-aos-duration="1500"
                    class="bg-white rounded-tl-3xl rounded-tr-3xl rounded-br-3xl shadow-md overflow-hidden">
                    <div class="p-4">
                        <img src="{{ asset('frontend/image/book/book.jpg') }}" alt="Document Cover"
                            class="w-full h-auto object-cover rounded-t-lg transition-transform duration-500 ease-in-out transform hover:scale-105" />
                        <div class="mt-4">
                            <a href="book/detail"
                                class="group px-3 py-1.5 text-[15px] text-[#4d4d4d] rounded-tl-xl rounded-tr-xl rounded-br-xl flex items-center">
                                <i class="fa-regular fa-clock text-[12px] text-[#006cb7] mr-1"></i> 2024-04-12
                            </a>
                            <h2 class="text-[18px] font-medium mt-2">
                                សៀវភៅកិច្ចតែងការថ្នាក់ទី៩
                            </h2>
                        </div>
                        <div class="flex items-center justify-between mt-3 space-x-3">
                            <a href="{{ asset('frontend/image/sheet/2018.pdf') }}" target="_blank"
                                class="group px-3 py-1.5 text-[15px] text-[#fff] rounded-tl-xl rounded-tr-xl rounded-br-xl border border-[#006cb7] hover:text-[#fff] bg-[#006cb7] hover:bg-[#006bb7cc] flex items-center">
                                <i class="fa-solid fa-download text-[12px] text-[#fff] mr-1 group-hover:text-[#fff]"></i>
                                ទាញយក
                            </a>
                            <a href="book/detail"
                                class="group px-3 py-1.5 text-[15px] text-[#006cb7] rounded-tl-xl rounded-tr-xl rounded-br-xl bg-transparent border border-[#006cb7] hover:text-[#fff] hover:bg-[#006cb7] flex items-center">
                                <i class="fa-solid fa-eye text-[12px] text-[#006cb7] mr-1 group-hover:text-[#fff]"></i>
                                មើលជាមុន
                            </a>
                        </div>


                    </div>
                </div>

                <div data-aos="zoom-in" data-aos-duration="1500"
                    class="bg-white rounded-tl-3xl rounded-tr-3xl rounded-br-3xl shadow-md overflow-hidden">
                    <div class="p-4">
                        <img src="{{ asset('frontend/image/book/book1.png') }}" alt="Document Cover"
                            class="w-full h-auto object-cover rounded-t-lg transition-transform duration-500 ease-in-out transform hover:scale-105" />
                        <div class="mt-4">
                            <a href="book/detail"
                                class="group px-3 py-1.5 text-[15px] text-[#4d4d4d] rounded-tl-xl rounded-tr-xl rounded-br-xl flex items-center">
                                <i class="fa-regular fa-clock text-[12px] text-[#006cb7] mr-1"></i> 2024-04-12
                            </a>
                            <h2 class="text-[18px] font-medium mt-2">
                                សៀវភៅកិច្ចតែងការថ្នាក់ទី១០
                            </h2>
                        </div>
                        <div class="flex items-center justify-between mt-3 space-x-3">
                            <a href="{{ asset('frontend/image/sheet/2018.pdf') }}" target="_blank"
                                class="group px-3 py-1.5 text-[15px] text-[#fff] rounded-tl-xl rounded-tr-xl rounded-br-xl border border-[#006cb7] hover:text-[#fff] bg-[#006cb7] hover:bg-[#006bb7cc] flex items-center">
                                <i class="fa-solid fa-download text-[12px] text-[#fff] mr-1 group-hover:text-[#fff]"></i>
                                ទាញយក
                            </a>
                            <a href="book/detail"
                                class="group px-3 py-1.5 text-[15px] text-[#006cb7] rounded-tl-xl rounded-tr-xl rounded-br-xl bg-transparent border border-[#006cb7] hover:text-[#fff] hover:bg-[#006cb7] flex items-center">
                                <i class="fa-solid fa-eye text-[12px] text-[#006cb7] mr-1 group-hover:text-[#fff]"></i>
                                មើលជាមុន
                            </a>
                        </div>


                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-5">
                <div data-aos="zoom-in" data-aos-duration="1500"
                    class="bg-white rounded-tl-3xl rounded-tr-3xl rounded-br-3xl shadow-md overflow-hidden">
                    <div class="p-4">
                        <img src="{{ asset('frontend/image/book/book1.png') }}" alt="Document Cover"
                            class="w-full h-auto object-cover rounded-t-lg transition-transform duration-500 ease-in-out transform hover:scale-105" />
                        <div class="mt-4">
                            <a href="book/detail"
                                class="group px-3 py-1.5 text-[15px] text-[#4d4d4d] rounded-tl-xl rounded-tr-xl rounded-br-xl flex items-center">
                                <i class="fa-regular fa-clock text-[12px] text-[#006cb7] mr-1"></i> 2024-04-12
                            </a>
                            <h2 class="text-[18px] font-medium mt-2">
                                សៀវភៅកិច្ចតែងការថ្នាក់ទី៧
                            </h2>
                        </div>
                        <div class="flex items-center justify-between mt-3 space-x-3">
                            <a href="{{ asset('frontend/image/sheet/2018.pdf') }}" target="_blank"
                                class="group px-3 py-1.5 text-[15px] text-[#fff] rounded-tl-xl rounded-tr-xl rounded-br-xl border border-[#006cb7] hover:text-[#fff] bg-[#006cb7] hover:bg-[#006bb7cc] flex items-center">
                                <i class="fa-solid fa-download text-[12px] text-[#fff] mr-1 group-hover:text-[#fff]"></i>
                                ទាញយក
                            </a>
                            <a href="book/detail"
                                class="group px-3 py-1.5 text-[15px] text-[#006cb7] rounded-tl-xl rounded-tr-xl rounded-br-xl bg-transparent border border-[#006cb7] hover:text-[#fff] hover:bg-[#006cb7] flex items-center">
                                <i class="fa-solid fa-eye text-[12px] text-[#006cb7] mr-1 group-hover:text-[#fff]"></i>
                                មើលជាមុន
                            </a>
                        </div>


                    </div>
                </div>

                <div data-aos="zoom-in" data-aos-duration="1500"
                    class="bg-white rounded-tl-3xl rounded-tr-3xl rounded-br-3xl shadow-md overflow-hidden">
                    <div class="p-4">
                        <img src="{{ asset('frontend/image/book/book.jpg') }}" alt="Document Cover"
                            class="w-full h-auto object-cover rounded-t-lg transition-transform duration-500 ease-in-out transform hover:scale-105" />
                        <div class="mt-4">
                            <a href="book/detail"
                                class="group px-3 py-1.5 text-[15px] text-[#4d4d4d] rounded-tl-xl rounded-tr-xl rounded-br-xl flex items-center">
                                <i class="fa-regular fa-clock text-[12px] text-[#006cb7] mr-1"></i> 2024-04-12
                            </a>
                            <h2 class="text-[18px] font-medium mt-2">
                                សៀវភៅកិច្ចតែងការថ្នាក់ទី៨
                            </h2>
                        </div>
                        <div class="flex items-center justify-between mt-3 space-x-3">
                            <a href="{{ asset('frontend/image/sheet/2018.pdf') }}" target="_blank"
                                class="group px-3 py-1.5 text-[15px] text-[#fff] rounded-tl-xl rounded-tr-xl rounded-br-xl border border-[#006cb7] hover:text-[#fff] bg-[#006cb7] hover:bg-[#006bb7cc] flex items-center">
                                <i class="fa-solid fa-download text-[12px] text-[#fff] mr-1 group-hover:text-[#fff]"></i>
                                ទាញយក
                            </a>
                            <a href="book/detail"
                                class="group px-3 py-1.5 text-[15px] text-[#006cb7] rounded-tl-xl rounded-tr-xl rounded-br-xl bg-transparent border border-[#006cb7] hover:text-[#fff] hover:bg-[#006cb7] flex items-center">
                                <i class="fa-solid fa-eye text-[12px] text-[#006cb7] mr-1 group-hover:text-[#fff]"></i>
                                មើលជាមុន
                            </a>
                        </div>


                    </div>
                </div>

                <div data-aos="zoom-in" data-aos-duration="1500"
                    class="bg-white rounded-tl-3xl rounded-tr-3xl rounded-br-3xl shadow-md overflow-hidden">
                    <div class="p-4">
                        <img src="{{ asset('frontend/image/book/book1.png') }}" alt="Document Cover"
                            class="w-full h-auto object-cover rounded-t-lg transition-transform duration-500 ease-in-out transform hover:scale-105" />
                        <div class="mt-4">
                            <a href="book/detail"
                                class="group px-3 py-1.5 text-[15px] text-[#4d4d4d] rounded-tl-xl rounded-tr-xl rounded-br-xl flex items-center">
                                <i class="fa-regular fa-clock text-[12px] text-[#006cb7] mr-1"></i> 2024-04-12
                            </a>
                            <h2 class="text-[18px] font-medium mt-2">
                                សៀវភៅកិច្ចតែងការថ្នាក់ទី៩
                            </h2>
                        </div>
                        <div class="flex items-center justify-between mt-3 space-x-3">
                            <a href="{{ asset('frontend/image/sheet/2018.pdf') }}" target="_blank"
                                class="group px-3 py-1.5 text-[15px] text-[#fff] rounded-tl-xl rounded-tr-xl rounded-br-xl border border-[#006cb7] hover:text-[#fff] bg-[#006cb7] hover:bg-[#006bb7cc] flex items-center">
                                <i class="fa-solid fa-download text-[12px] text-[#fff] mr-1 group-hover:text-[#fff]"></i>
                                ទាញយក
                            </a>
                            <a href="book/detail"
                                class="group px-3 py-1.5 text-[15px] text-[#006cb7] rounded-tl-xl rounded-tr-xl rounded-br-xl bg-transparent border border-[#006cb7] hover:text-[#fff] hover:bg-[#006cb7] flex items-center">
                                <i class="fa-solid fa-eye text-[12px] text-[#006cb7] mr-1 group-hover:text-[#fff]"></i>
                                មើលជាមុន
                            </a>
                        </div>


                    </div>
                </div>

                <div data-aos="zoom-in" data-aos-duration="1500"
                    class="bg-white rounded-tl-3xl rounded-tr-3xl rounded-br-3xl shadow-md overflow-hidden">
                    <div class="p-4">
                        <img src="{{ asset('frontend/image/book/book.jpg') }}" alt="Document Cover"
                            class="w-full h-auto object-cover rounded-t-lg transition-transform duration-500 ease-in-out transform hover:scale-105" />
                        <div class="mt-4">
                            <a href="book/detail"
                                class="group px-3 py-1.5 text-[15px] text-[#4d4d4d] rounded-tl-xl rounded-tr-xl rounded-br-xl flex items-center">
                                <i class="fa-regular fa-clock text-[12px] text-[#006cb7] mr-1"></i> 2024-04-12
                            </a>
                            <h2 class="text-[18px] font-medium mt-2">
                                សៀវភៅកិច្ចតែងការថ្នាក់ទី១០
                            </h2>
                        </div>
                        <div class="flex items-center justify-between mt-3 space-x-3">
                            <a href="{{ asset('frontend/image/sheet/2018.pdf') }}" target="_blank"
                                class="group px-3 py-1.5 text-[15px] text-[#fff] rounded-tl-xl rounded-tr-xl rounded-br-xl border border-[#006cb7] hover:text-[#fff] bg-[#006cb7] hover:bg-[#006bb7cc] flex items-center">
                                <i class="fa-solid fa-download text-[12px] text-[#fff] mr-1 group-hover:text-[#fff]"></i>
                                ទាញយក
                            </a>
                            <a href="book/detail"
                                class="group px-3 py-1.5 text-[15px] text-[#006cb7] rounded-tl-xl rounded-tr-xl rounded-br-xl bg-transparent border border-[#006cb7] hover:text-[#fff] hover:bg-[#006cb7] flex items-center">
                                <i class="fa-solid fa-eye text-[12px] text-[#006cb7] mr-1 group-hover:text-[#fff]"></i>
                                មើលជាមុន
                            </a>
                        </div>


                    </div>
                </div>
            </div>

            <div class="flex justify-center items-center mt-4">
                <div>
                    <button class="px-4 py-2 text-gray-600 bg-gray-200 rounded hover:bg-gray-300">« មុន</button>
                    <button class="px-4 py-2 text-gray-600 bg-[#006cb7] text-white rounded hover:bg-blue-600">1</button>
                    <button class="px-4 py-2 text-gray-600 bg-[#006cb7] text-white rounded hover:bg-blue-600">2</button>
                    <button class="px-4 py-2 text-gray-600 bg-gray-200 rounded hover:bg-gray-300">បន្ទាប់ »</button>
                </div>
            </div>

        </section>
    </div>

    <!-- ================= End ================= -->
@endsection
