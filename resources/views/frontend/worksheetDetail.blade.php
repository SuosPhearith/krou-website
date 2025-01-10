@extends('frontend.layout')
@section('content')
    <section class="mx-auto max-w-screen-xl p-4">
        <div class="container mx-auto px-4 py-8">
            <!-- Content Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Left Column: PDF Preview -->
                <div class="md:col-span-2">
                    <div class="border rounded-lg shadow-lg">
                        <div class="bg-blue-600 text-white px-4 py-2 rounded-t-lg">
                            <h5 class="text-lg font-semibold">មើលឯកសារជាមុន</h5>
                        </div>
                        <div class="p-4">
                            <!-- PDF Embed -->
                            <embed src="{{ asset('frontend/image/sheet/2018.pdf') }}" type="application/pdf"
                                class="w-full h-[500px] rounded" />
                        </div>
                    </div>
                </div>

                <!-- Right Column: Details and Actions -->
                <div>
                    <!-- Document Information -->
                    <div class="border rounded-lg shadow-lg mb-6">
                        <div class="bg-gray-700 text-white px-4 py-2 rounded-t-lg">
                            <h5 class="text-lg font-semibold">ព័ត៌មានឯកសារ</h5>
                        </div>
                        <div class="p-4">
                            <ul class="space-y-2 text-gray-800">
                                <li>
                                    <span class="font-semibold">ចំណងជើង:</span>សៀវភៅកិច្ចតែងការថ្នាក់ទី៨
                                </li>
                                <li>
                                    <span class="font-semibold">ថ្ងៃចេញផ្សាយ:</span> 2024-04-12
                                </li>
                                <li>
                                    <span class="font-semibold">មកពីសាលា:</span> វីទ្យាល័យព្រះសុីសុវត្ថិ
                                </li>
                                <li>
                                    <span class="font-semibold">សាស្រ្តាចារ្យ:</span> ឆុង ពិសី
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="py-10 bg-cover bg-center" style="background-image: url('{{ asset('frontend/image/bg_image.png') }}');">
        <section class="relative max-w-screen-xl mx-auto text-center p-4 mt-5 text-[#y]">
            <div class="flex justify-between items-center">
                <div>
                    <p class="text-[22px] flex items-center text-[#006cb7] text-start font-bold">
                        <i class="fa-solid fa-file-pdf text-[25px] text-red-700 mr-1"></i>
                        ឯកសារដែលទាក់ទង
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-5 mt-5">
                <div data-aos="zoom-in" data-aos-duration="1500"
                    class="bg-[#F1F5F9] p-4 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl shadow-md">
                    <div class="flex justify-between items-center space-x-5">
                        <p class="text-[15px] text-black max-w-[200px] overflow-hidden text-ellipsis whitespace-nowrap"
                            title=" ...">
                            ក្របខណ្ឌគោលនយោបាយសេដ្ឋកិច្ចក្របខណ្ឌគោលនយោបាយសេដ្ឋកិច្ចក្របខណ្ឌគោលនយោបាយសេដ្ឋកិច្ចក្របខណ្ឌគោលនយោបាយសេដ្ឋកិច្ច
                            ...
                        </p>
                        <div class="flex items-center space-x-2 text-[15px]">
                            <a href="" class="text-[#06B6D4] hover:text-[#06b5d4c0]">
                                <i class="fa-solid fa-download"></i>
                            </a>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <img src="{{ asset('frontend/image/pdf.png') }}" alt="Map of Cambodia"
                            class="w-36 h-36 mt-2 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl duration-500 ease-in-out transform hover:scale-110">
                    </div>
                </div>
                <div data-aos="zoom-in" data-aos-duration="1500"
                    class="bg-[#F1F5F9] p-4 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl shadow-md">
                    <div class="flex justify-between items-center space-x-5">
                        <p class="text-[15px] text-black max-w-[200px] overflow-hidden text-ellipsis whitespace-nowrap"
                            title=" ...">
                            ក្របខណ្ឌគោលនយោបាយសេដ្ឋកិច្ចក្របខណ្ឌគោលនយោបាយសេដ្ឋកិច្ចក្របខណ្ឌគោលនយោបាយសេដ្ឋកិច្ចក្របខណ្ឌគោលនយោបាយសេដ្ឋកិច្ច
                            ...
                        </p>
                        <div class="flex items-center space-x-2 text-[15px]">
                            <a href="" class="text-[#06B6D4] hover:text-[#06b5d4c0]">
                                <i class="fa-solid fa-download"></i>
                            </a>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <img src="{{ asset('frontend/image/pdf.png') }}" alt="Map of Cambodia"
                            class="w-36 h-36 mt-2 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl duration-500 ease-in-out transform hover:scale-110 ">
                    </div>
                </div>
                <div data-aos="zoom-in" data-aos-duration="1500"
                    class="bg-[#F1F5F9] p-4 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl shadow-md">
                    <div class="flex justify-between items-center space-x-5">
                        <p class="text-[15px] text-black max-w-[200px] overflow-hidden text-ellipsis whitespace-nowrap"
                            title=" ...">
                            ក្របខណ្ឌគោលនយោបាយសេដ្ឋកិច្ចក្របខណ្ឌគោលនយោបាយសេដ្ឋកិច្ចក្របខណ្ឌគោលនយោបាយសេដ្ឋកិច្ចក្របខណ្ឌគោលនយោបាយសេដ្ឋកិច្ច
                            ...
                        </p>
                        <div class="flex items-center space-x-2 text-[15px]">
                            <a href="" class="text-[#06B6D4] hover:text-[#06b5d4c0]">
                                <i class="fa-solid fa-download"></i>
                            </a>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <img src="{{ asset('frontend/image/pdf.png') }}" alt="Map of Cambodia"
                            class="w-36 h-36 mt-2 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl  duration-500 ease-in-out transform hover:scale-110">
                    </div>
                </div>
                <div data-aos="zoom-in" data-aos-duration="1500"
                    class="bg-[#F1F5F9] p-4 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl shadow-md">
                    <div class="flex justify-between items-center space-x-5">
                        <p class="text-[15px] text-black max-w-[200px] overflow-hidden text-ellipsis whitespace-nowrap"
                            title=" ...">
                            ក្របខណ្ឌគោលនយោបាយសេដ្ឋកិច្ចក្របខណ្ឌគោលនយោបាយសេដ្ឋកិច្ចក្របខណ្ឌគោលនយោបាយសេដ្ឋកិច្ចក្របខណ្ឌគោលនយោបាយសេដ្ឋកិច្ច
                            ...
                        </p>
                        <div class="flex items-center space-x-2 text-[15px]">
                            <a href="" class="text-[#06B6D4] hover:text-[#06b5d4c0]">
                                <i class="fa-solid fa-download"></i>
                            </a>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <img src="{{ asset('frontend/image/pdf.png') }}" alt="Map of Cambodia"
                            class="w-36 h-36 mt-2 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl  duration-500 ease-in-out transform hover:scale-110">
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
