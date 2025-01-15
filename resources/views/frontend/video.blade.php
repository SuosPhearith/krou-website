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
        <div class="container mx-auto px-4 py-8">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <p class="text-[22px] text-start text-[#006cb7] font-bold">
                        <i class="fa-solid fa-video ml-1 text-[20px] text-[#006cb7]"></i>
                        វីដេអូ
                    </p>
                </div>
            </div>

            <!-- Main Grid Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-4">
                <!-- Left Column: Lecturer Videos -->
                <div class="md:col-span-2">
                    @foreach ($lecturers as $lecturer)
                        <div class="border rounded-lg shadow-lg mb-6">
                            <h5 class="text-lg font-semibold p-4 bg-gray-100">
                                <a href="/video/detail/{{$lecturer->id}}">
                                    បង្ហាញដោយ៖ {{ $lecturer->name }}
                                    មកពី៖ {{ $lecturer->coming_from }}
                                </a>
                            </h5>
                            <div class="p-4">
                                @foreach ($lecturer->videos as $video)
                                    <div class="flex items-center justify-between px-4 py-2 hover:bg-gray-100 cursor-pointer"
                                        onclick="openModal('{{ $video->title }}', '{{ config('app.file_base_url') . $video->video_uri }}')">
                                        <div class="flex items-center space-x-2">
                                            <i class="fa-solid fa-circle-play text-[17px] text-[#006cb7]"></i>
                                            <span>{{ $video->title }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Right Column: Document Information -->
                <div>
                    <div class="border rounded-lg shadow-lg mb-6">
                        @foreach ($allDocuments as $doc)
                            <div
                                class="flex items-center justify-between px-4 py-2 hover:bg-gray-100 cursor-pointer
                                {{ $doc->id == $document->id ? 'bg-[#006cb8] text-white' : '' }}">
                                <a href="{{ route('video', $doc->id) }}" class="flex items-center space-x-2">
                                    <span class="font-semibold">{{ $doc->title }}</span>
                                </a>
                            </div>
                        @endforeach
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

    <!-- Modal Script -->
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
