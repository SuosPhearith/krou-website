@extends('frontend.layout')
@section('content')
    <section id="bg-header" class="bg-cover bg-center py-24"
        style="background-image: url('{{ asset('frontend/image/video/banner.jpg') }}');">
        <div class="max-w-screen-xl mx-auto text-center text-white">
            <h2 class="text-[20px] font-bold text-[#006cb7]">
                សូមស្វាគមន៍ទៅកាន់ផ្នែកវីដេអូ
            </h2>
            <p class="text-sm mt-1 text-[#006cb7]">ស្វែងរកវីដេអូសិក្សា និងយុទ្ធវិធីបង្រៀនដែលសំខាន់</p>
        </div>
    </section>
    <section class="mx-auto max-w-screen-xl p-4">
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <p class="text-[22px] text-start text-[#006cb7] font-bold">
                    <i class="fa-solid fa-video ml-1 text-[20px] text-[#006cb7]"></i>
                    វីដេអូ
                </p>
            </div>
        </div>
        <div class="flex flex-col md:flex-row md:justify-between">
            <div class="flex flex-wrap gap-2 mb-4 w-full md:w-auto ml-auto">
                <div class="relative w-full sm:w-auto md:flex-1">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-5 h-5 text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </span>
                    <input type="text" placeholder="ស្វែងរក..."
                        class="w-full px-10 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <button type="button"
                    class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-r-md hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    ស្វែងរក
                </button>
            </div>
        </div>
        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 mt-4">
            <div class="bg-gray-100 p-6 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl shadow-md">
                <div class="">
                    <video controls class="w-full h-auto object-cover">
                        <source src="{{ asset('frontend/image/video/1.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <h2 class="text-[#4d4d4d] text-[20px]  mt-2 text-start font-bold py-2">វិធីបង្រៀនបែបសហការ (Collaborative
                    Learning)</h2>
                <hr class="border w-full mx-auto my-4">
                <div class="flex justify-between items-center mt-2">
                    <a href="">
                        <i class="fa-solid fa-eye text-[#006cb7] text-[15px]"></i>
                        <span class="text-[#4d4d4d] text-[15px] text-start">៧០ មើល</span>
                    </a>
                    <a onclick="openVideoModal('{{ asset('frontend/image/video/1.mp4') }}')"
                        class="flex items-center text-[#006cb7] space-x-2">
                        <i class="fa-solid fa-circle-play text-[15px] text-[#006cb7]"></i>
                        <span>មើលវីដេអូ</span>
                    </a>
                </div>
            </div>

            <div class="bg-gray-100 p-6 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl shadow-md">
                <div class="">
                    <video controls class="w-full h-auto object-cover">
                        <source src="{{ asset('frontend/image/video/1.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <h2 class="text-[#4d4d4d] text-[20px]  mt-2 text-start font-bold py-2">យុទ្ធវិធី Caousel brainstorm</h2>
                <hr class="border w-full mx-auto my-4">
                <div class="flex justify-between items-center mt-2">
                    <a href="">
                        <i class="fa-solid fa-eye text-[#006cb7] text-[15px]"></i>
                        <span class="text-[#4d4d4d] text-[15px] text-start">៧០ មើល</span>
                    </a>
                    <a onclick="openVideoModal('{{ asset('frontend/image/video/1.mp4') }}')"
                        class="flex items-center text-[#006cb7] space-x-2">
                        <i class="fa-solid fa-circle-play text-[15px] text-[#006cb7]"></i>
                        <span>មើលវីដេអូ</span>
                    </a>
                </div>
            </div>

            <div class="bg-gray-100 p-6 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl shadow-md">
                <div class="">
                    <video controls class="w-full h-auto object-cover">
                        <source src="{{ asset('frontend/image/video/1.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <h2 class="text-[#4d4d4d] text-[20px]  mt-2 text-start font-bold py-2">យុទ្ធវិធី Think-Pair-Share</h2>
                <hr class="border w-full mx-auto my-4">
                <div class="flex justify-between items-center mt-2">
                    <a href="">
                        <i class="fa-solid fa-eye text-[#006cb7] text-[15px]"></i>
                        <span class="text-[#4d4d4d] text-[15px] text-start">៧០ មើល</span>
                    </a>
                    <a onclick="openVideoModal('{{ asset('frontend/image/video/1.mp4') }}')"
                        class="flex items-center text-[#006cb7] space-x-2">
                        <i class="fa-solid fa-circle-play text-[15px] text-[#006cb7]"></i>
                        <span>មើលវីដេអូ</span>
                    </a>
                </div>
            </div>

            <div class="bg-gray-100 p-6 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl shadow-md">
                <div class="">
                    <video controls class="w-full h-auto object-cover">
                        <source src="{{ asset('frontend/image/video/1.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <h2 class="text-[#4d4d4d] text-[20px]  mt-2 text-start font-bold py-2">យុទ្ធវិធី Jig Saw II</h2>
                <hr class="border w-full mx-auto my-4">
                <div class="flex justify-between items-center mt-2">
                    <a href="">
                        <i class="fa-solid fa-eye text-[#006cb7] text-[15px]"></i>
                        <span class="text-[#4d4d4d] text-[15px] text-start">៧០ មើល</span>
                    </a>
                    <a onclick="openVideoModal('{{ asset('frontend/image/video/1.mp4') }}')"
                        class="flex items-center text-[#006cb7] space-x-2">
                        <i class="fa-solid fa-circle-play text-[15px] text-[#006cb7]"></i>
                        <span>មើលវីដេអូ</span>
                    </a>
                </div>
            </div>

            <div class="bg-gray-100 p-6 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl shadow-md">
                <div class="">
                    <video controls class="w-full h-auto object-cover">
                        <source src="{{ asset('frontend/image/video/1.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <h2 class="text-[#4d4d4d] text-[20px]  mt-2 text-start font-bold py-2">យុទ្ធវិធី Jig Saw I</h2>
                <hr class="border w-full mx-auto my-4">
                <div class="flex justify-between items-center mt-2">
                    <a href="">
                        <i class="fa-solid fa-eye text-[#006cb7] text-[15px]"></i>
                        <span class="text-[#4d4d4d] text-[15px] text-start">៧០ មើល</span>
                    </a>
                    <a onclick="openVideoModal('{{ asset('frontend/image/video/1.mp4') }}')"
                        class="flex items-center text-[#006cb7] space-x-2">
                        <i class="fa-solid fa-circle-play text-[15px] text-[#006cb7]"></i>
                        <span>មើលវីដេអូ</span>
                    </a>
                </div>
            </div>

        </div>
    </section>
    <!-- Video Modal -->
    <div id="videoModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white p-4 rounded-lg w-11/12 md:w-2/3 lg:w-1/2">
            <button class="text-red-500 float-right" onclick="closeVideoModal()">Close</button>
            <video id="modalVideo" controls class="w-full">
                <source src="" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <script>
        function openVideoModal(videoSrc) {
            const modal = document.getElementById('videoModal');
            const video = document.getElementById('modalVideo');
            video.src = videoSrc;
            modal.classList.remove('hidden');
        }

        function closeVideoModal() {
            const modal = document.getElementById('videoModal');
            const video = document.getElementById('modalVideo');
            video.pause(); // Pause the video when closing
            modal.classList.add('hidden');
        }
    </script>
@endsection
