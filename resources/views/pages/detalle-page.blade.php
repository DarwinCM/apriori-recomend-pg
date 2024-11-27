<div>
    <div class="flex justify-center items-center">
        <div class="container">
            <div class="xl:mx-50 lg:mx-20 sm:mx-20  py-10 font-sans">
                <div
                    class="m-2 grid grid-cols-1 xxl:grid-cols-3 xl:grid-cols-3 lg:grid-cols-3 md:grid-cols-1 sm:grid-cols-1 xl:gap-8 lg:gap-4 md:gap-3 sm:gap-0">
                    <div class="col-span-2 relative">
                        @if ($mensaje)
                            <div class="alert alert-success">
                                {{ $mensaje }}
                            </div>
                        @endif
                        <div class="flex flex-row w-12/12">
                            <div class="relative w-6/12">
                                <div
                                    class="blog-overlay rounded-md overflow-hidden absolute bottom-0 left-0 right-0 top-0 flex flex-col items-start justify-end p-1 xl:p-10 md:p-10 sm:p-10">
                                    <p class="text-white font-bold text-sm xl:text-xl md:text-lg">
                                        {{ $libro->title }}
                                    </p>
                                    <p class="text-[#FF603A] text-sm pt-2 xl:pt-5 sm:pt-5">Jan 01, 2024</p>
                                </div>
                            
                                     
                                    <img src="{{ $libro->images->isNotEmpty() ? Storage::url($libro->images->first()->url) : '/img/default.png' }}"
                                    class="w-full min-h-[540px] max-h-[540px] object-cover rounded-md" 
                                    alt="">

                            </div>
                            <div class="flex flex-col px-10   w-6/12  text-lg">
                                <p class="uppercase font-extrabold text-[#FF603A] text-2xl">
                                    {{ $libro->title }}
                                </p>
                                <div class="flex flex-col gap-5 pt-14">
                                    <div class="flex flex-wrap gap-4 ">
                                        <h3 class="text-[#FF603A]">
                                            Autor :
                                        </h3>
                                        <h3 class="uppercase font-extrabold text-blue-950">
                                            {{ $libro->author->nombre }}
                                        </h3>
                                    </div>
                                    <div class="flex flex-wrap gap-4 ">
                                        <h3 class="text-[#FF603A]">
                                            Categoria :
                                        </h3>
                                        <h3 class="uppercase font-extrabold text-blue-950">
                                            {{ $libro->category->name }}
                                        </h3>
                                    </div>
                                    <div class="flex flex-wrap gap-4 ">
                                        <h3 class="text-[#FF603A]">
                                            Paginas :
                                        </h3>
                                        <h3 class="uppercase font-extrabold text-blue-950">
                                            380
                                        </h3>
                                    </div>
                                    <div class="flex flex-wrap gap-4 ">
                                        <h3 class="text-[#FF603A]">
                                            Calificación :
                                        </h3>
                                        <div class="flex justify-between items-center w-full">
                                            <h3 class="uppercase font-extrabold text-blue-950">
                                                a a a a a
                                            </h3>
                                            <h3 class="uppercase font-extrabold text-blue-950">
                                                <select id="calificacion" wire:model="calificacion"
                                                    wire:change="calificar">
                                                    <option value="">Selecciona tu calificación</option>
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        <option value="{{ $i }}">{{ $i }}</option>
                                                    @endfor
                                                </select>

                                            </h3>
                                        </div>
                                    </div>
                                    @if (session()->has('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif

                                    <div class="flex flex-wrap gap-4 ">
                                        <h3 class="text-[#FF603A]">
                                            Publicado :
                                        </h3>
                                        <h3 class="uppercase font-extrabold text-blue-950">
                                            {{ $libro->publication_date }}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <!-- Mostrar el mensaje de éxito si está presente -->
                            @if (session()->has('success'))
                                <div class="alert alert-success bg-green-800 text-white py-2 px-4">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <!-- Mostrar el mensaje de error si está presente -->
                            @if (session()->has('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                        </div>
                        <h2 class="mb-5 pt-[15rem] text-[#44425A] texto-boldd text-4xl">Descripción</h2>

                        <div class="mb-5">

                      

                                <img src="{{ $libro->images->isNotEmpty() ? Storage::url($libro->images->first()->url) : '/img/default.png' }}"
                                class="mr-5 mt-5 max-h-[440px] rounded-lg" 
                                alt="">


                            <p class=" text-xl text-gray-500">
                                {{ $libro->body }}
                            </p>

                        </div>
                        <h2 class="mb-5 text-[#44425A] texto-boldd text-4xl" style="letter-spacing: 5px;">3 COMMENTS
                        </h2>
                    </div>

                    <div class="col-span-1 xl:mt-0 lg:mt-0 md:mt-0 sm:mt-5 mt-2">
                        <div class="bg-[#44425A] rounded-md py-5 xl:py-14 md:py-10 sm:py-6">
                            <div class="flex justify-center items-center">
                                <div class="flex flex-col items-center">

                                 
                                        
                                <img src="{{ $libro->images->isNotEmpty() ? Storage::url($libro->images->first()->url) : '/img/default.png' }}"
                                class="object-cover rounded-full max-w-36" 
                                alt="">


                                    <p class="text-[#FF603A] text-3xl font-bold pt-2"> {{ $libro->author->nombre }}</p>
                                </div>
                            </div>
                            <p class="text-white pt-10 xl:pt-10 md:pt-10 sm:pt-10 px-5 text-xl text-center">
                                {{ $libro->author->bio }}</p>
                        </div>
                        <div class=" mt-16">
                            <h1 class="text-4xl  font-extrabold text-[#44425A] pb-10 " style="letter-spacing: 5px;">
                                RECOMENDADOS
                            </h1>

                            <div class="flex flex-col gap-8 p-0 m-0">
                                @foreach ($recomendaciones as $item)
                                    <a href="{{ route('detalle', $item->id) }}" class="flex items-center  ">
                                      
                                            <img src="{{ $item->images->isNotEmpty() ? Storage::url($item->images->first()->url) : '/img/default.png' }}"
                                        class="max-h-24 min-w-24 object-cover rounded-lg" 
                                        alt="">
                                        <div class="px-5">
                                            <h1 class="text-lg font-bold text-[#44425A]">
                                                {{ $item->title }}
                                            </h1>
                                            <h1 class="text-sm text-[#FF603A]">
                                                {{ $item->created_at->format('F d, Y') }}</h1>
                                            <h1 class="text-sm text-blue-900">
                                                Categoria : {{ $item->category->name }}</h1>
                                        </div>
                                    </a>
                                @endforeach
                                <a href="{{ route('recomendados', $item->id) }}"
                                    rel="noopener noreferrer">Ver mas</a>
                            </div>
                        </div>
                        <div class=" mt-16">
                            <h1 class="text-4xl font-extrabold text-[#44425A] pb-10 " style="letter-spacing: 5px;">
                                MISMO AUTOR</h1>

                            <div class="grid gap-4">
                                @foreach ($recomendacionesPorAutor as $item)
                                    <a href="{{ route('detalle', $item->id) }}" class="flex items-center  ">
                                      
                                            <img src="{{ $item->images->isNotEmpty() ? Storage::url($item->images->first()->url) : '/img/default.png' }}"
                                            class="max-h-24 min-w-24 object-cover rounded-lg" 
                                            alt="">
                                                      
                               
                                        <div class="px-5">
                                            <h1 class="text-lg font-bold text-[#44425A]">
                                                {{ $item->title }}
                                            </h1>
                                            <h1 class="text-sm text-blue-900">
                                                Autor : {{ $item->category->name }}</h1>
                                            <h1 class="text-sm text-[#FF603A]">
                                                {{ $item->created_at->format('F d, Y') }}</h1>
                                            <h1 class="text-sm text-blue-900">
                                                Autor : {{ $item->author->nombre }}</h1>
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

        .texto-boldd {
            font-weight: 900 !important;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

        }
    </style>




</div>
