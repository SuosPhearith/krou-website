@extends('frontend.layout')

@section('content')
<section id="bg-header" class="bg-cover bg-center py-24"
    style="background-image: url('{{ asset('frontend/image/bg_book.png') }}');">
    <div class="max-w-screen-xl mx-auto text-center text-[#006cb7]">
        <h2 class="text-[20px] font-bold text-white-700">
        សូមជ្រើសរើសឯកសារដែលលោកគ្រូ អ្នកគ្រូត្រូវការ
        </h2>
    </div>
</section>

<section class="max-w-screen-xl mx-auto text-center p-4 mt-2 mb-5">
    <div class="flex justify-between items-center">
        <div>
            <p class="text-[22px] flex items-center text-[#006cb7] text-start font-bold">
                <i class="fa-solid fa-file text-[25px] text-red-700 mr-1"></i>
                {{ $book->title }}
            </p>
        </div>
    </div>
    <div class="overflow-x-auto">
        <div class="w-full">
            <!-- Header Row -->
            <div class="flex items-center text-gray-700 font-semibold text-sm border-b border-gray-300">
                <div class="flex-none font-bold p-4 text-left">លេខសម្គាល់</div>
                <div class="flex-auto w-full font-bold p-4 text-left">ចំណងជើង</div>
                <div class="flex-auto w-full font-bold p-4 text-left">សាស្រ្តាចារ្យ</div>
                <div class="flex-auto w-full font-bold p-4 text-left">មកពីសាលា</div>
                <div class="flex-auto font-bold items-center p-4 text-center">ទាញយក</div>
            </div>
            <!-- Data Rows -->
            @foreach ($documents as $document)
            <!-- Data Rows -->
            <div
                class="flex mb-2 text-gray-700 text-sm border {{ $loop->iteration % 2 == 1 ? 'bg-[#e5e7eb]' : 'bg-white' }} border-gray-200 hover:bg-gray-100">
                <div class="flex-none p-4 text-left mr-16">{{ $loop->iteration }}</div> <!-- Incremented index -->
                <div class="flex-auto p-4 w-full text-left">
                    <span>{{ $document->title }}</span>
                    <p>ថ្ងៃចេញផ្សាយ: 12/18/2020</p> 
                </div>
                <div class="flex-auto p-4 w-full text-left">
                    <span>{{ $document->title }}</span>
                </div>
                <div class="flex-auto p-4 w-full text-left">
                    <span>{{ $document->title }}</span>
                </div>
                <div class="flex-auto flex justify-between space-x-4 p-4 text-center">
                    <i class="fa-solid fa-eye text-blue-500 text-lg"></i>
                    <i class="fa-solid fa-download text-blue-500 text-lg"></i>
                </div>
            </div>
            @endforeach

        </div>

    </div>
    <ul class="flex mt-5 justify-center items-center space-x-2">
        <li>
            <a href="#" class="py-2 px-4 bg-gray-100 text-blue-500 hover:bg-gray-200">
                &laquo;
            </a>
        </li>
        <li>
            <a href="#" class="py-2 px-4 bg-blue-500 text-white hover:bg-blue-600">
                1
            </a>
        </li>
        <li>
            <a href="#" class="py-2 px-4 bg-gray-100 text-gray-500 hover:bg-gray-200">
                2
            </a>
        </li>
        <li>
            <a href="#" class="py-2 px-4 bg-gray-100 text-blue-500 hover:bg-gray-200">
                &raquo;
            </a>
        </li>
    </ul>
</section>


<!-- <section class="max-w-screen-xl mx-auto text-center p-4 mt-2 mb-5">
    <div class="overflow-x-auto">
        <div class="w-full">
            <div class="flex items-center text-gray-700 font-semibold text-sm border-b border-gray-300">
                <div class="flex-none font-bold p-4 text-left">លេខសម្គាល់</div>
                <div class="flex-auto w-full font-bold p-4 text-left">ចំណងជើង</div>
                <div class="flex-auto w-full font-bold p-4 text-left">សាស្រ្តាចារ្យ</div>
                <div class="flex-auto w-full font-bold p-4 text-left">មកពីសាលា</div>
                <div class="flex-auto font-bold items-center p-4 text-center">ទាញយក</div>
            </div>
            @foreach ($documents as $document)
            <div class="flex mb-2 text-gray-700 text-sm border bg-gray-200 border-gray-200 hover:bg-gray-100">
                <div class="flex-none  p-4 text-left mr-16">{{ $loop->iteration }}</div>
                <div class="flex-auto p-4 w-full text-left">
                    <p>ប្រកាសស្តីពីនីតិវិធីនៃការផ្តល់វិញ្ញាបនបត្រសមត្ថភាពជំនាញនាវិក
                        សម្រាប់នាវិកបម្រើការងារនៅលើនាវាឆ្នេរសមុទ្រនិងនាវាផ្លូវទឹកក្នុងប្រទេស ២៤-១២-២០២៤ ប្រកាស</p>
                    <p class="text-xs text-gray-500">3 months ago</p>
                    <p class="text-xs text-gray-500">3 months ago</p>
                    <p class="text-xs text-gray-500">3 months ago</p>
                </div>
                <div class="flex-auto flex justify-between space-x-4 p-4 text-center">
                    <i class="fa-solid fa-eye text-blue-500 text-lg"></i>
                    <i class="fa-solid fa-download text-blue-500 text-lg"></i>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section> -->

<!-- Related Documents Section -->
<!-- <div class="py-10 bg-cover bg-center" style="background-image: url('{{ asset('frontend/image/bg_image.png') }}');">
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
            @forelse ($documents as $document)
            <div data-aos="zoom-in" data-aos-duration="1500"
                class="bg-[#F1F5F9] p-4 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl shadow-md">
                <div class="flex justify-between items-center space-x-5">
                    <p class="text-[15px] text-black max-w-[200px] overflow-hidden text-ellipsis whitespace-nowrap"
                        title="{{ $document->title }}">
                        {{ $document->title }}
                    </p>
                    <div class="flex items-center space-x-2 text-[15px]">
                        <a href="{{ config('app.file_base_url') . $document->file_uri }}" target="_blank"
                            class="text-[#06B6D4] hover:text-[#06b5d4c0]">
                            <i class="fa-solid fa-download"></i>
                        </a>
                    </div>
                </div>
                <div class="flex justify-center">
                    <img src="{{ asset('frontend/image/pdf.png') }}" alt="{{ $document->title }}"
                        class="w-36 h-36 mt-2 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl duration-500 ease-in-out transform hover:scale-110">
                </div>
            </div>
            @empty
            <p class="text-gray-500 text-lg">No related documents available.</p>
            @endforelse
        </div>
    </section>
</div> -->
@endsection