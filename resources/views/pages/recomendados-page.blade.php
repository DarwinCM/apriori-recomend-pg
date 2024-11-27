<div>
    <div class="flex justify-center items-center">
        <div class="container">
            <div class="xl:mx-50 lg:mx-20 md:mx-10 sm:mx-20  py-10 font-sans">
                <div
                    class="m-2 grid grid-cols-1 xxl:grid-cols-1 xl:grid-cols-1 lg:grid-cols-1 md:grid-cols-1 sm:grid-cols-1 xl:gap-6 lg:gap-4 md:gap-3 sm:gap-0">
                    <div class="col-span-2 relative">
                        <div class="grid grid-cols-1 xl:grid-cols-3 lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 gap-6">
                            @foreach ($recomendaciones as $item)
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
                                {{ $recomendaciones->links() }}
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
