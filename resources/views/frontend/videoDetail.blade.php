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
                    <div>
                        <video controls class="w-full h-auto object-cover">
                            <source src="{{ config('app.file_base_url') . $video->video_uri }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <h2 class="text-[#4d4d4d] text-[20px] mt-2 text-start font-bold py-2">{{ $video->title }}</h2>
                    <hr class="border w-full mx-auto my-4">
                    <div class="flex justify-between items-center mt-2">
                        <a href="">
                            <i class="fa-solid fa-eye text-[#006cb7] text-[15px]"></i>
                            <span class="text-[#4d4d4d] text-[15px] text-start">70 មើល</span>
                        </a>
                        <a onclick="openVideoModal('{{ config('app.file_base_url') . $video->video_uri }}')"
                            class="flex items-center text-[#006cb7] space-x-2 cursor-pointer">
                            <i class="fa-solid fa-circle-play text-[15px] text-[#006cb7]"></i>
                            <span>មើលវីដេអូ</span>
                        </a>
                    </div>
                </div>
            @endforeach
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
