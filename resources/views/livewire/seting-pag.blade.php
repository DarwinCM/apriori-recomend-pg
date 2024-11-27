<div>
    <div class="pt-20 bg-white rounded-xl mx-10 my-10 px-10 py-10">
        <div class="flex justify-center items-center flex-wrap">
            <!-- Left -->
            <div class="flex-shrink max-w-full w-full lg:w-2/3 overflow-hidden">
                <div class="w-full">
                    <h2 class="text-gray-800 text-2xl font-bold flex justify-center items-center">
                        <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span>NOTICIAS
                    </h2>
                </div>
                <div class="flex-1 bg-[#7AE2E2] rounded-lg p-1">
                    <form id="scraping-form" class="flex flex-col w-full gap-2">
                        <input
                            class="w-full pr-4 py-2.5 rounded-lg text-sm text-gray-600 outline-none border border-gray-300 focus:border-green-500 focus:ring-green-500 shadow-lg"
                            type="text" id="link" name="link"
                            required>
                        <button
                            class="px-4 py-1 rounded-lg bg-gradient-to-r from-green-700 to-green-600 focus:from-green-700 focus:to-green-600 active:from-green-600 active:to-green-600 text-sm text-white font-semibold tracking-wide cursor-pointer shadow-lg"
                            type="submit">Iniciar Scraping</button>
                        <button
                            class="px-4 py-1 rounded-lg bg-gradient-to-r from-amber-700 to-yellow-600 focus:from-amber-700 focus:to-yellow-600 active:from-amber-600 active:to-yellow-600 text-sm text-white font-semibold tracking-wide cursor-pointer shadow-lg"
                            id="stop-button">Detener Scraping</button>
                        <button
                            class="px-4 py-1 rounded-lg bg-gradient-to-r from-red-700 to-red-600 focus:from-red-700 focus:to-red-600 active:from-red-600 active:to-red-600 text-sm text-white font-semibold tracking-wide cursor-pointer shadow-lg"
                            id="shutdown-button">Apagar Servidor</button>
                    </form>
                </div>
                <div class="flex flex-row flex-wrap -mx-3">
                    @foreach ($tableSettings as $tableSetting)
                        <div
                            class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                            <div class="flex flex-row sm:block hover-img">
                                <a href="">
                                    <img class="max-w-full w-full mx-auto" src="{{ $tableSetting->image }}"
                                        alt="alt title">
                                </a>
                                <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                    <h3 class="text-lg font-bold leading-tight mb-2">
                                        <a href="#">{{ $tableSetting->nombre }}</a>
                                    </h3>
                                    <p class="hidden md:block text-gray-600 leading-tight mb-1">
                                        {{ $tableSetting->fecha }}</p>
                                    <p class="hidden md:block text-gray-600 leading-tight mb-1">
                                        {{ $tableSetting->body }}</p>
                                    <a class="text-gray-500" href="#"><span
                                            class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>{{ $tableSetting->descrip }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                @if ($tableSettings->count())
                    {{ $tableSettings->links() }}
                @endif
            </div>

        </div>
    </div>
</div>
<script>
    document.getElementById('scraping-form').addEventListener('submit', async (event) => {
        event.preventDefault();
        const link = document.getElementById('link').value;

        try {
            const response = await fetch('http://localhost:3000/start-scraping', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ link_web: link })
            });
            const message = await response.text();
            alert(message);
        } catch (error) {
            console.error('Error al iniciar el scraping:', error);
        }
    });

    document.getElementById('stop-button').addEventListener('click', async () => {
        try {
            const response = await fetch('http://localhost:3000/stop-scraping', {
                method: 'POST',
            });
            const message = await response.text();
            alert(message);
        } catch (error) {
            console.error('Error al detener el scraping:', error);
        }
    });

    document.getElementById('shutdown-button').addEventListener('click', async () => {
        try {
            const response = await fetch('http://localhost:3000/shutdown-server', {
                method: 'POST',
            });
            const message = await response.text();
            alert(message);
            // Opcional: Redirige a otra página o muestra un mensaje de cierre
        } catch (error) {
            console.error('Error al apagar el servidor:', error);
        }
    });
</script>
