<!-- Section 1 -->
<section class="h-auto bg-white">

</section>


<!-- Section 1 -->
<section class="py-20 bg-gray-50">
    <div class="container items-center max-w-7xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
        <div class="flex flex-wrap items-center -mx-3">
            <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
                <div class="py-16 px-10 sm:py-24 sm:px-6 lg:px-8 ">
                    <h2 class="text-3xl text-yellow-500 font-bold tracking-wide uppercase">Ganador elegido</h2>
                    <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">
                        {{ $winner->first_name }} {{ $winner->last_name }}</p>

                    <table class="text-left mt-5 inline-block">
                        <tbody>
                            <tr>
                                <td class=" pr-3 text-sm text-gray-600">Nombre:</td>
                                <td class="font-medium">{{ $winner->first_name }} </td>
                            </tr>
                            <tr>
                                <td class=" pr-3 text-sm text-gray-600">Apellido:</td>
                                <td class="font-medium">{{ $winner->last_name }}</td>
                            </tr>
                            <tr>
                                <td class=" pr-3 text-sm text-gray-600">Telefono:</td>
                                <td class="font-medium">{{ $winner->phone }}</td>
                            </tr>
                            <tr>
                                <td class=" pr-3 text-sm text-gray-600">Email:</td>
                                <td class="font-medium">{{ $winner->email }}</td>
                            </tr>
                            <tr>
                                <td class=" pr-3 text-sm text-gray-600">Cedula:</td>
                                <td class="font-medium">{{ $winner->cedula }}</td>
                            </tr>

                            <tr>
                                <td class=" pr-3 text-sm text-gray-600">Departamento:</td>
                                <td class="font-medium">{{ $winner->city->department->name }}</td>
                            </tr>
                            <tr>
                                <td class=" pr-3 text-sm text-gray-600">Ciudad:</td>
                                <td class="font-medium">{{ $winner->city->name }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0"><img
                    class="mx-auto sm:max-w-sm lg:max-w-full"
                    src="https://cdn.devdojo.com/images/november2020/feature-graphic.png" alt="feature image"></div>
        </div>
    </div>
</section>

<section class="container items-center max-w-7xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
    <div class="max-w-7xl mx-auto py-16 px-10 sm:py-24 sm:px-6 lg:px-8 ">
        <h2 class="text-3xl text-yellow-500 font-bold tracking-wide uppercase">Lista de Clientes registrados</h2>


        <table class="text-left mt-5 w-full">
            <thead>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Cedula</th>
                <th>Departamento</th>
                <th>Ciudad</th>
            </thead>
            <tbody class="divide-y divided-gray-200">
                @foreach ($promotions as $item)
                    <tr class="@if ($item->id == $winner->id) text-green-500 font-bold @endif">
                        <td class="py-4 pr-3">{{ $item->first_name }} </td>

                        <td class="py-4 pr-3">{{ $item->last_name }}</td>

                        <td class="py-4 pr-3">{{ $item->phone }}</td>

                        <td class="py-4 pr-3">{{ $item->email }}</td>

                        <td class="py-4 pr-3">{{ $item->cedula }}</td>

                        <td class="py-4 pr-3">{{ $item->city->department->name }}</td>

                        <td class="py-4 pr-3">{{ $item->city->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
