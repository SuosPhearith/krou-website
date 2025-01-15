@extends('frontend.layout')

@section('content')
    <!-- Header Section -->
    <section id="bg-header" class="bg-cover bg-center py-24"
        style="background-image: url('{{ asset('frontend/image/bg_book.png') }}');">
        <div class="max-w-screen-xl mx-auto text-center text-white">
            <h2 class="text-[20px] font-bold text-[#006cb7]">
                សូមស្វាគមន៍ទៅកាន់ផ្នែកសៀវភៅកិច្ចតែងការ
            </h2>
            <p class="text-sm mt-1 text-[#006cb7]">ស្វែងរកសៀវភៅកិច្ចតែងការ</p>
        </div>
    </section>

    <!-- Books Section -->
    <div class="py-10" style="background-image: url('{{ asset('frontend/image/bg_image.png') }}');">
        <section class="max-w-screen-xl mx-auto text-center p-4 mt-5">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <p class="text-[22px] text-start text-[#006cb7] font-bold">
                        <i class="fa-solid fa-file-lines ml-1 text-[20px] text-[#006cb7]"></i>
                        សៀវភៅកិច្ចតែងការ
                    </p>
                </div>
            </div>

            <!-- Books Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-5">
                @forelse ($books as $book)
                    <div data-aos="zoom-in" data-aos-duration="1500"
                        class="bg-white rounded-tl-3xl rounded-tr-3xl rounded-br-3xl shadow-md overflow-hidden">
                        <div class="p-4">
                            <!-- Book Cover -->
                            <img src="{{ config('app.file_base_url') . $book->cover_uri }}" alt="Document Cover"
                                class="w-full h-auto object-cover rounded-t-lg transition-transform duration-500 ease-in-out transform hover:scale-105" />

                            <!-- Book Details -->
                            <div class="mt-4">
                                <a href="{{ route('book-detail', $book->id) }}"
                                    class="group px-3 py-1.5 text-[15px] text-[#4d4d4d] rounded-tl-xl rounded-tr-xl rounded-br-xl flex items-center">
                                    <i class="fa-regular fa-clock text-[12px] text-[#006cb7] mr-1"></i>
                                    {{ $book->published_date }}
                                </a>
                                <h2 class="text-[18px] font-medium mt-2">
                                    {{ $book->title }}
                                </h2>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex items-center justify-between mt-3 space-x-3">
                                <a href="{{ config('app.file_base_url') . $book->file_uri }}" target="_blank"
                                    class="group px-3 py-1.5 text-[15px] text-[#fff] rounded-tl-xl rounded-tr-xl rounded-br-xl border border-[#006cb7] hover:text-[#fff] bg-[#006cb7] hover:bg-[#006bb7cc] flex items-center">
                                    <i class="fa-solid fa-download text-[12px] text-[#fff] mr-1 group-hover:text-[#fff]"></i>
                                    ទាញយក
                                </a>
                                <a href="{{ route('book-detail', $book->id) }}"
                                    class="group px-3 py-1.5 text-[15px] text-[#006cb7] rounded-tl-xl rounded-tr-xl rounded-br-xl bg-transparent border border-[#006cb7] hover:text-[#fff] hover:bg-[#006cb7] flex items-center">
                                    <i class="fa-solid fa-eye text-[12px] text-[#006cb7] mr-1 group-hover:text-[#fff]"></i>
                                    មើលជាមុន
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-500">មិនមានសៀវភៅទេ។</p>
                @endforelse
            </div>

            <!-- Pagination -->
            @if ($books->hasPages())
                <div class="flex justify-center items-center mt-4">
                    <div class="flex space-x-2">
                        <!-- Previous Page Button -->
                        @if ($books->onFirstPage())
                            <button class="px-4 py-2 text-gray-400 bg-gray-200 rounded cursor-not-allowed">« មុន</button>
                        @else
                            <a href="{{ $books->previousPageUrl() }}"
                                class="px-4 py-2 text-gray-600 bg-gray-200 rounded hover:bg-gray-300">« មុន</a>
                        @endif

                        <!-- Page Numbers -->
                        @foreach ($books->getUrlRange(1, $books->lastPage()) as $page => $url)
                            @if ($page == $books->currentPage())
                                <button
                                    class="px-4 py-2 text-white bg-[#006cb7] rounded hover:bg-blue-600">{{ $page }}</button>
                            @else
                                <a href="{{ $url }}"
                                    class="px-4 py-2 text-gray-600 bg-gray-200 rounded hover:bg-gray-300">{{ $page }}</a>
                            @endif
                        @endforeach

                        <!-- Next Page Button -->
                        @if ($books->hasMorePages())
                            <a href="{{ $books->nextPageUrl() }}"
                                class="px-4 py-2 text-gray-600 bg-gray-200 rounded hover:bg-gray-300">បន្ទាប់ »</a>
                        @else
                            <button class="px-4 py-2 text-gray-400 bg-gray-200 rounded cursor-not-allowed">បន្ទាប់
                                »</button>
                        @endif
                    </div>
                </div>
            @endif
        </section>
    </div>
@endsection
