<section class="relative w-full px-8 text-gray-700 bg-white body-font" data-tails-scripts="//unpkg.com/alpinejs">
    <div class="container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl">
        <a href="#_"
            class="relative z-10 flex items-center w-auto text-2xl font-bold leading-none text-black select-none">Promocion
            <span class="ml-2 text-yellow-500">Bogota</span>
        </a>

        <div class="relative z-10 inline-flex items-center space-x-3 md:ml-5 lg:justify-end">

            @if ($winner)
                <a href={{ route('exportPromotionList') }}
                    class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-gray-600 whitespace-no-wrap bg-white border border-gray-200 shadow-sm hover:bg-gray-100 focus:outline-none focus:shadow-none rounded-md">
                    Descargar lista de clientes registrados
                </a>

                <a href={{ route('deletePromotion') }}
                    class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-red-600 whitespace-no-wrap bg-white border border-gray-200 shadow-sm hover:bg-gray-100 focus:outline-none focus:shadow-none rounded-md">
                    Borrar todos los clientes
                </a>
            @else
                <span class="text-gray-500">
                    Clientes {{ $promotions->count() }}/{{ env('PROMOTION_COUNT_MAX') }}
                    <span class="text-xs block text-gray-400">Se eligira un ganador cuando existan mínimo
                        {{ env('PROMOTION_COUNT_MAX') }}
                        usuarios</span>
                </span>
            @endif
        </div>
    </div>
</section>
