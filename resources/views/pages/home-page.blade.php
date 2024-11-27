<div>
    <div class="flex justify-center items-center">
        <div class="container">
            <div class="xl:mx-50 lg:mx-20 md:mx-10 sm:mx-20  py-10 font-sans">
                <div
                    class="m-2 grid grid-cols-1 xxl:grid-cols-3 xl:grid-cols-3 lg:grid-cols-3 md:grid-cols-1 sm:grid-cols-1 xl:gap-6 lg:gap-4 md:gap-3 sm:gap-0">
                    <div class="col-span-2 relative">
                        <div class="grid grid-cols-1 xl:grid-cols-2 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-6">
                            @foreach ($libros as $item)
                                <a class="relative" href="{{ route('detalle', $item->id) }}">
                                    <div
                                        class="blog-overlay rounded-md overflow-hidden absolute bottom-0 left-0 right-0 top-0 flex flex-col items-start justify-end p-1 xl:p-10 md:p-10 sm:p-10">
                                        <p class="text-white font-bold text-sm xl:text-xl md:text-lg">
                                            {{ $item->title }}</p>
                                        <div class="flex flex-col pt-2 xl:pt-5 sm:pt-5">
                                            <div class="">
                                                <div
                                                    class="mr-1 py-1 px-2 inline-block border text-white border-solid border-white rounded-lg ">
                                                    <h1 class="text-sm ">{{ $item->category->name }}</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex w-full justify-between  items-center py-4">
                                            <p class="text-[#FF603A] text-sm ">
                                                {{ $item->created_at->format('F d, Y') ?? '' }}</p>
                                            <p class="text-white text-md ">{{ $item->author->nombre }}</p>
                                        </div>
                                    </div>


                                        <img src="{{ $item->images->isNotEmpty() ? Storage::url($item->images->first()->url) : '/img/default.png' }}"
                                        class="w-full min-h-[500px] max-h-[510px] object-cover rounded-md" 
                                        alt="">

                                </a>
                            @endforeach
                        </div>

                        <div class="flex justify-end pt-10">

                            <div>
                                {{ $libros->links() }}
                            </div>
                        </div>
                    </div>

                    <div class="col-span-1 xl:mt-0 lg:mt-0 md:mt-0 sm:mt-5 mt-2">

                        <div class="pb-16 xl:pb-16 md:pb-16 sm:pb-16">
                            <div class="relative flex items-center text-[#FF603A] focus-within:text-green-500">
                                <span class="absolute left-6 h-full flex items-center pr-5 border-r border-gray-300">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </span>

                                <input type="search" placeholder="Keyword" wire:model="search"
                                    class="w-full pl-20  py-3 rounded-md text-2xl text-gray-600 outline-none border border-gray-300 focus:border-[#FF603A] focus:ring-[#FF603A] shadow">
                            </div>
                        </div>
                        <h1 class="text-4xl  font-extrabold text-[#44425A] pb-10 " style="letter-spacing: 5px;">
                            CATEGORIES
                        </h1>

                        <div class="p-0 m-0">
                            @foreach ($librosPorCategoria as $item)
                                <a class="flex items-center py-4 text-[#44425A]  hover:text-[#FF603A]"
                                    style="border-bottom: 1px solid gray">
                                    <h1 class="text-lg cursor-pointer font-extrabold  ">
                                        {{ $item->name }}
                                    </h1>
                                    {{-- Mostrar la cantidad de libros de esta categoría --}}

                                    <h1 class="ml-auto text-white font-bold bg-[#FF603A] px-4 rounded-full">
                                        {{ $item->libros_count ?? '0' }}
                                    </h1>
                                </a>
                            @endforeach
                        </div>

                        <div class=" mt-16">
                            <h1 class="text-4xl font-extrabold text-[#44425A] pb-10 " style="letter-spacing: 5px;">
                                LIBROS RECIENTES</h1>

                            <div class="grid gap-4">
                                @foreach ($newlibro as $item)
                                    <a class="flex items-center  " href="{{ route('detalle', $item->id) }}">
                                      
                                                             
                                <img src="{{ $item->images->isNotEmpty() ? Storage::url($item->images->first()->url) : '/img/default.png' }}"
                                class="max-h-24 min-w-24 object-cover rounded-lg" 
                                alt="">

                                        <div class="px-5">
                                            <h1 class="text-lg font-bold text-[#44425A]">
                                                {{ $item->title }}
                                            </h1>
                                            <h1 class="text-sm text-[#FF603A]">
                                                {{ $item->created_at->format('F d, Y') }}</h1>
                                        </div>
                                    </a>
                                @endforeach

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .blog-overlay {
            background: linear-gradient(rgba(68, 66, 90, 0), #44425a);
        }
    </style>
</div>
