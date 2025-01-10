@extends('frontend.layout')
@section('content')
    <section id="bg-header" class="bg-cover bg-center py-24"
        style="background-image: url('{{ asset('frontend/image/bg_book.png') }}');">
        <div class="max-w-screen-xl mx-auto text-center text-white">
            <h2 class="text-[20px] font-bold text-[#006cb7]">
                សូមស្វាគមន៍ទៅកាន់ផ្នែកវីដេអូ
            </h2>
            <p class="text-sm mt-1 text-[#006cb7]">ស្វែងរកវីដេអូសិក្សា និងយុទ្ធវិធីបង្រៀនដែលសំខាន់</p>
        </div>
    </section>

    <!-- =================== Start ============= -->
    <section class="mx-auto max-w-screen-xl p-4">
        <div class="container mx-auto px-4 py-8">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <p class="text-[22px] text-start text-[#006cb7] font-bold">
                        <i class="fa-solid fa-video ml-1 text-[20px] text-[#006cb7]"></i>
                        វីដេអូ
                    </p>
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
            </div>

            <!-- Content Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-4">
                <!-- Left Column: PDF Preview -->
                <div class="md:col-span-2">
                    <!-- Left Column: PDF Preview -->
                    <div class="border rounded-lg shadow-lg mb-6">
                        <div>
                            <h5 class="text-lg font-semibold p-2">បង្ហាញដោយ៖ លោកគ្រូ ឈួន រ៉ាវី មកពីវិទ្យាល័យ ព្រះសុីសុវត្ថិ
                                សាលារៀនជំនាន់ថ្មី</h5>
                            <!-- Content 1 -->
                            <div class="flex items-center justify-between px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                onclick="openModal('វិធីបង្រៀនបែបសហការ (Collaborative Learning)', '{{ asset('frontend/image/video/1.mp4') }}')">
                                <div class="flex items-center space-x-2">
                                    <i class="fa-solid fa-circle-play text-[17px] text-[#006cb7]"></i>
                                    <span>វិធីបង្រៀនបែបសហការ (Collaborative Learning)</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                onclick="openModal('វិធីបង្រៀនបែបសហការ (Collaborative Learning)', '{{ asset('frontend/image/video/1.mp4') }}')">
                                <div class="flex items-center space-x-2">
                                    <i class="fa-solid fa-circle-play text-[17px] text-[#006cb7]"></i>
                                    <span>យុទ្ធវិធី Caousel brainstorm</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                onclick="openModal('វិធីបង្រៀនបែបសហការ (Collaborative Learning)', '{{ asset('frontend/image/video/1.mp4') }}')">
                                <div class="flex items-center space-x-2">
                                    <i class="fa-solid fa-circle-play text-[17px] text-[#006cb7]"></i>
                                    <span>យុទ្ធវិធី Think-Pair-Share</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                onclick="openModal('វិធីបង្រៀនបែបសហការ (Collaborative Learning)', '{{ asset('frontend/image/video/1.mp4') }}')">
                                <div class="flex items-center space-x-2">
                                    <i class="fa-solid fa-circle-play text-[17px] text-[#006cb7]"></i>
                                    <span>យុទ្ធវិធី Jig Saw II</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                onclick="openModal('វិធីបង្រៀនបែបសហការ (Collaborative Learning)', '{{ asset('frontend/image/video/1.mp4') }}')">
                                <div class="flex items-center space-x-2">
                                    <i class="fa-solid fa-circle-play text-[17px] text-[#006cb7]"></i>
                                    <span>យុទ្ធវិធី Jig Saw I</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Left Column: PDF Preview -->
                    <div class="border rounded-lg shadow-lg mb-6">
                        <div>
                            <h5 class="text-lg font-semibold p-2">បង្ហាញដោយ៖ លោកគ្រូ ឆុង ពិសី មកពីវិទ្យាល័យ ព្រះសុីសុវត្ថិ
                                សាលារៀនជំនាន់ថ្មី</h5>
                            <!-- Content 1 -->
                            <div class="flex items-center justify-between px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                onclick="openModal('យុទ្ធវិធី៖ Gallery Walk(ដំណើរការវិចិត្រិសាល)', '{{ asset('frontend/image/video/1.mp4') }}')">
                                <div class="flex items-center space-x-2">
                                    <i class="fa-solid fa-circle-play text-[17px] text-[#006cb7]"></i>
                                    <span>យុទ្ធវិធី៖ Gallery Walk(ដំណើរការវិចិត្រិសាល)</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                onclick="openModal('យុទ្ធវិធី៖ KWL', '{{ asset('frontend/image/video/1.mp4') }}')">
                                <div class="flex items-center space-x-2">
                                    <i class="fa-solid fa-circle-play text-[17px] text-[#006cb7]"></i>
                                    <span>យុទ្ធវិធី៖ KWL</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                onclick="openModal('យុទ្ធវិធី៖ តាមលំនាំ 5Es', '{{ asset('frontend/image/video/1.mp4') }}')">
                                <div class="flex items-center space-x-2">
                                    <i class="fa-solid fa-circle-play text-[17px] text-[#006cb7]"></i>
                                    <span>យុទ្ធវិធី៖ តាមលំនាំ 5Es</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                onclick="openModal('យុទ្ធវិធី៖ ការជជែកដេញដោល (Debate)', '{{ asset('frontend/image/video/1.mp4') }}')">
                                <div class="flex items-center space-x-2">
                                    <i class="fa-solid fa-circle-play text-[17px] text-[#006cb7]"></i>
                                    <span>យុទ្ធវិធី៖ ការជជែកដេញដោល (Debate)</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                onclick="openModal('យុទ្ធវិធី៖ ការបង្រៀនបែបដោះស្រាយបញ្ហា', '{{ asset('frontend/image/video/1.mp4') }}')">
                                <div class="flex items-center space-x-2">
                                    <i class="fa-solid fa-circle-play text-[17px] text-[#006cb7]"></i>
                                    <span>យុទ្ធវិធី៖ ការបង្រៀនបែបដោះស្រាយបញ្ហា</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                onclick="openModal('យុទ្ធវិធី៖ ការសិក្សាបែបគម្រោង', '{{ asset('frontend/image/video/1.mp4') }}')">
                                <div class="flex items-center space-x-2">
                                    <i class="fa-solid fa-circle-play text-[17px] text-[#006cb7]"></i>
                                    <span>យុទ្ធវិធី៖ ការសិក្សាបែបគម្រោង</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Left Column: PDF Preview -->
                    <div class="border rounded-lg shadow-lg mb-6">
                        <div>
                            <h5 class="text-lg font-semibold p-2">បង្ហាញដោយ៖ អ្នកគ្រូ គឹម សុត្ថារី មកពីវិទ្យាល័យ
                                ព្រះសុីសុវត្ថិ
                                សាលារៀនជំនាន់ថ្មី</h5>
                            <!-- Content 1 -->
                            <div class="flex items-center justify-between px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                onclick="openModal('យុទ្ធវិធី៖ KWL', '{{ asset('frontend/image/video/1.mp4') }}')">
                                <div class="flex items-center space-x-2">
                                    <i class="fa-solid fa-circle-play text-[17px] text-[#006cb7]"></i>
                                    <span>យុទ្ធវិធី៖ KWL</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                onclick="openModal('យុទ្ធវិធី៖ Gallery Walk', '{{ asset('frontend/image/video/1.mp4') }}')">
                                <div class="flex items-center space-x-2">
                                    <i class="fa-solid fa-circle-play text-[17px] text-[#006cb7]"></i>
                                    <span>យុទ្ធវិធី៖ Gallery Walk</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                onclick="openModal('ផែនទីគំនិត', '{{ asset('frontend/image/video/1.mp4') }}')">
                                <div class="flex items-center space-x-2">
                                    <i class="fa-solid fa-circle-play text-[17px] text-[#006cb7]"></i>
                                    <span>យុទ្ធវិធី៖ ផែនទីគំនិត</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                onclick="openModal('Three Step Interview', '{{ asset('frontend/image/video/1.mp4') }}')">
                                <div class="flex items-center space-x-2">
                                    <i class="fa-solid fa-circle-play text-[17px] text-[#006cb7]"></i>
                                    <span>យុទ្ធវិធី៖ Three Step Interview</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Details and Actions -->
                <div>
                    <!-- Document Information -->
                    <div class="border rounded-lg shadow-lg mb-6">
                        <div class="bg-[#006cb8] text-white px-4 py-2 rounded-t-lg">
                            <h5 class="text-lg font-semibold">វីដេអូ</h5>
                        </div>
                        <div>
                            <div class="flex items-center justify-between px-4 py-2 hover:bg-gray-100 cursor-pointer">
                                <div class="flex items-center space-x-2">
                                    <span class="font-semibold">យុទ្ធវិធីបង្រៀន</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between px-4 py-2 hover:bg-gray-100 cursor-pointer">
                                <div class="flex items-center space-x-2">
                                    <span class="font-semibold">វិធីសាស្រ្តបង្រៀន</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between px-4 py-2 hover:bg-gray-100 cursor-pointer">
                                <div class="flex items-center space-x-2">
                                    <span class="font-semibold">ឯកសារបណ្តុះបណ្តាលគ្រូ មធ្យម</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between px-4 py-2 hover:bg-gray-100 cursor-pointer">
                                <div class="flex items-center space-x-2">
                                    <span class="font-semibold">ឯកសារបណ្តុះបណ្តាលគ្រូ បឋម</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div id="videoModal" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden z-50">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden w-full max-w-2xl">
            <div class="flex justify-between items-center p-4 border-b">
                <h5 id="modalTitle" class="text-lg font-semibold">Video Title</h5>
                <button class="text-gray-500 hover:text-gray-700" onclick="closeModal()">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="p-4">
                <video id="videoPlayer" class="w-full" controls>
                    <source id="videoSource" src="{{ asset('frontend/image/video/1.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>

    <script>
        function openModal(videoTitle, videoSrc) {
            const modal = document.getElementById('videoModal');
            const modalTitle = document.getElementById('modalTitle');
            const videoPlayer = document.getElementById('videoPlayer');
            const videoSource = document.getElementById('videoSource');

            // Set the title and video source
            modalTitle.textContent = videoTitle;
            videoSource.src = videoSrc;
            videoPlayer.load(); // Reload video

            // Show modal
            modal.classList.remove('hidden');
        }

        function closeModal() {
            const modal = document.getElementById('videoModal');
            const videoPlayer = document.getElementById('videoPlayer');

            // Hide modal and pause video
            modal.classList.add('hidden');
            videoPlayer.pause();
        }
    </script>
@endsection
