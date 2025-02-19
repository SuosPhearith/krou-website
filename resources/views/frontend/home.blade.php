@extends('frontend.layout')
@section('content')
<section id="bg-header" class="bg-cover bg-center py-24"
    style="background-image: url('{{ asset('frontend/image/bg_book.png') }}');">
    <div class="max-w-screen-xl mx-auto text-center text-[#006cb7]">
        <h2 class="text-[20px] font-bold text-white-800">
            ស្វែងរកឯកសារកម្រិតសិក្សា
        </h2>
        <form class="mt-5 flex items-center justify-center">
            <div class="flex items-center border border-gray-300 rounded-full overflow-hidden">
                <input type="text" placeholder="ស្វែងរក..." aria-label="Search"
                    class="lg:w-[600px] md:w-[400px] text-gray-700 py-2 px-4 text-center placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#06B6D4]" />
                <button type="submit"
                    class="bg-[#006cb7] text-white px-4 py-2 hover:bg-[#06b5d4b4] transition-colors duration-200"
                    aria-label="Search">
                    <i class="fa-solid fa-search"></i>
                </button>
            </div>
        </form>
    </div>
</section>

<div class="bg-[#f3f3f361] py-10">
    <section class="max-w-screen-xl mx-auto text-center p-4">
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <h2 class="text-[20px] text-start text-[#006cb7] font-bold">
                    <i class="fa-solid fa-folder-open ml-1 text-[20px] text-[#006cb7]"></i>
                    ឯកសារជំនួយ
                </h2>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-5">
            @if ($documents->isEmpty())
            <p>No documents available.</p>
            @else
            @foreach ($documents as $document)
            <div data-aos="zoom-in" data-aos-duration="1500"
                class="bg-white p-6 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl shadow-lg hover:border-b-4 hover:border-[#006cb7] h-full">

                <!-- Document Image -->
                <a href="/video/{{$document->id}}" class="flex items-center justify-center mb-4">
                    <img src="{{ config('app.file_base_url') . $document->cover_uri }}" alt="{{ $document->title }}"
                        class="w-20 h-20 rounded-none transition-transform duration-500 ease-in-out transform hover:scale-105">
                </a>

                <!-- Document Title -->
                <h2 class="text-[#4d4d4d] text-[20px] text-center font-bold py-2">{{ $document->title }}</h2>

                <!-- Divider -->
                <hr class="border w-full mx-auto my-4">

                <!-- Action Button -->
                <div class="flex justify-center mt-2">
                    <a href="/video/{{$document->id}}"
                        class="flex items-center border-dashed border-2 border-[#006cb7] rounded-full p-3">
                        <i class="fa-solid fa-arrow-right text-[15px] text-[#006cb7]"></i>
                    </a>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </section>
</div>

<!-- =================== Start ============= -->
<div class="py-10" style="background-image: url('{{ asset('frontend/image/bg_image.png') }}');">
    <section class="max-w-screen-xl mx-auto text-center p-4 mt-5">
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <p class="text-[22px] text-start text-[#006cb7] font-bold">
                    <i class="fa-solid fa-graduation-cap ml-1 text-[20px] text-[#006cb7]"></i>
                    សៀវភៅកិច្ចតែងការ
                </p>
            </div>
            <div class="flex items-center">
                <a href="book" class="text-[12px] text-start text-[#006cb7] lg:text-[18px] flex items-center">
                    ទាំងអស់
                    <i class="bx bx-chevron-right ml-1 text-[20px] text-[#006cb7]"></i>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-5">
            @if ($books->isEmpty())
            <p>No documents available.</p>
            @else
            @foreach ($books as $book)
            <div data-aos="zoom-in" data-aos-duration="1500"
                class="bg-white rounded-tl-3xl rounded-tr-3xl rounded-br-3xl shadow-md overflow-hidden">
                <div class="p-4">
                    <img src="{{ config('app.file_base_url') . $book->cover_uri }}" alt="Document Cover"
                        class="w-full h-auto object-cover rounded-t-lg transition-transform duration-500 ease-in-out transform hover:scale-105" />
                    <div class="mt-4">
                        <h2 class="text-[18px] font-medium mt-2">
                            {{ $book->title }}
                        </h2>
                    </div>
                    <hr class="border w-full mx-auto my-4">
                    <div class="flex justify-between items-center space-x-2 mt-2">
                        <a href="book/detail/{{$book->id}}"
                            class="group px-3 py-1.5 text-[15px] text-[#4d4d4d] rounded-tl-xl rounded-tr-xl rounded-br-xl flex items-center">
                            <i class="fa-regular fa-clock text-[12px] text-[#006cb7] mr-1"></i>
                            {{ \Carbon\Carbon::parse($book->published_date)->format('d M Y') }}
                        </a>


                        <a href="book/detail/{{$book->id}}" class="flex items-center text-[#006cb7]">
                            មើលលម្អិត
                            <i class="fa-solid fa-eye ml-1 text-[20px] text-[#006cb7]"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </section>
</div>
<!-- ================= End ================= -->

<!-- =================== Start ============= -->
<div class="bg-[#f3f3f361] py-10">
    <section class="max-w-screen-xl mx-auto text-center p-4 mt-5">
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <p class="text-[22px] text-start text-[#006cb7] font-bold">
                    <i class="fa-solid fa-graduation-cap ml-1 text-[20px] text-[#006cb7]"></i>
                    សន្លឹកកិច្ចការ
                </p>
            </div>
            <div class="flex items-center">
                <a href="worksheet" class="text-[12px] text-start text-[#006cb7] lg:text-[18px] flex items-center">
                    ទាំងអស់
                    <i class="bx bx-chevron-right ml-1 text-[20px] text-[#006cb7]"></i>
                </a>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-5">
            @if ($worksheets->isEmpty())
            <p>No documents available.</p>
            @else
            @foreach ($worksheets as $worksheet)
            <div data-aos="zoom-in" data-aos-duration="1500"
                class="bg-white rounded-tl-3xl rounded-tr-3xl rounded-br-3xl shadow-md overflow-hidden">
                <div class="p-4">
                    <img src="{{ config('app.file_base_url') . $worksheet->cover_uri }}" alt="Document Cover"
                        class="w-full h-auto object-cover rounded-t-lg transition-transform duration-500 ease-in-out transform hover:scale-105" />
                    <div class="mt-4">
                        <h2 class="text-[18px] font-medium mt-2">
                            {{ $worksheet->title }}
                        </h2>
                    </div>
                    <hr class="border w-full mx-auto my-4">
                    <div class="flex justify-between items-center space-x-2 mt-2">
                        <a href="worksheet/detail/{{$worksheet->id}}"
                            class="group px-3 py-1.5 text-[15px] text-[#4d4d4d] rounded-tl-xl rounded-tr-xl rounded-br-xl flex items-center">
                            <i class="fa-regular fa-clock text-[12px] text-[#006cb7] mr-1"></i>
                            {{ \Carbon\Carbon::parse($worksheet->published_date)->format('d M Y') }}
                        </a>


                        <a href="worksheet/detail/{{$worksheet->id}}" class="flex items-center text-[#006cb7]">
                            មើលលម្អិត
                            <i class="fa-solid fa-eye ml-1 text-[20px] text-[#006cb7]"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            @endif

        </div>
    </section>
</div>
@endsection