@extends('frontend.layout')

@section('content')
    <!-- Header Section -->
    <section id="bg-header" class="bg-cover bg-center py-24"
        style="background-image: url('{{ asset('frontend/image/bg_book.png') }}');">
        <div class="max-w-screen-xl mx-auto text-center text-white">
            <h2 class="text-[20px] font-bold text-[#006cb7]">សូមស្វាគមន៍ទៅកាន់ផ្នែកវីដេអូ</h2>
            <p class="text-sm mt-1 text-[#006cb7]">ស្វែងរកវីដេអូសិក្សា និងយុទ្ធវិធីបង្រៀនដែលសំខាន់</p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="mx-auto max-w-screen-xl p-4">
        <div class="flex justify-between items-center">
            <p class="text-[22px] text-start text-[#006cb7] font-bold">
                <i class="fa-solid fa-video ml-1 text-[20px] text-[#006cb7]"></i>
                វីដេអូរបស់ {{ $lecturer->name }}
            </p>
        </div>

        <!-- Video Grid -->
        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 mt-4">
            @foreach ($videos as $video)
                <div class="bg-gray-100 p-6 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl shadow-md">
                    <!-- Video -->
                    <div class="relative group">
                        <video controls class="w-full h-auto object-cover">
                            <source src="{{ config('app.file_base_url') . $video->video_uri }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>

                    <!-- Video Title -->
                    <h2 class="text-[#4d4d4d] text-[20px] mt-2 font-bold py-2">
                        {{ $video->title }}
                    </h2>

                    <!-- Video Stats -->
                    <hr class="border w-full mx-auto my-4">
                    <div class="flex justify-between items-center mt-2">
                        <span class="flex items-center space-x-1">
                            <i class="fa-solid fa-eye text-[#006cb7] text-[15px]"></i>
                            <span class="text-[#4d4d4d] text-[15px]">70 មើល</span>
                        </span>
                        <button onclick="openVideoModal('{{ config('app.file_base_url') . $video->video_uri }}')"
                            class="flex items-center text-[#006cb7] space-x-2 cursor-pointer">
                            <i class="fa-solid fa-circle-play text-[15px]"></i>
                            <span>មើលវីដេអូ</span>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Video Modal -->
    <div id="videoModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white p-6 rounded-lg w-11/12 md:w-2/3 lg:w-1/2 relative">
            <!-- Close Button -->
            <button class="absolute top-2 right-2 text-red-500 text-lg font-bold" onclick="closeVideoModal()">
                &times;
            </button>

            <!-- Video -->
            <video id="modalVideo" controls autoplay class="w-full rounded-md mt-4">
                <source src="" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <!-- Control Buttons -->
            <div class="flex justify-between mt-4">
                <button onclick="rewindVideo()" class="px-4 py-2 bg-gray-200 rounded">-5s</button>
                <button onclick="forwardVideo()" class="px-4 py-2 bg-gray-200 rounded">+5s</button>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
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
            video.src = ''; // Clear the video source
            modal.classList.add('hidden');
        }

        function rewindVideo() {
            const video = document.getElementById('modalVideo');
            video.currentTime = Math.max(0, video.currentTime - 5); // Rewind by 5 seconds, ensuring it doesn't go below 0
        }

        function forwardVideo() {
            const video = document.getElementById('modalVideo');
            video.currentTime = Math.min(video.duration, video.currentTime + 5); // Forward by 5 seconds, ensuring it doesn't exceed the video's duration
        }
    </script>
@endsection
