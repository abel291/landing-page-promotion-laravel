<!-- Section 1 -->
<section class="h-auto bg-white text-center">
    <div class="max-w-2xl mx-auto py-16 px-10 sm:py-24 sm:px-6 lg:px-8 sm:text-center">
        <h2 class="text-base font-semibold text-indigo-600 tracking-wide uppercase">Ganador(a)</h2>
        <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">
            {{ $winner->first_name }} {{ $winner->last_name }}</p>

        <table class="text-left mt-5 inline-block">
            <tbody>
                <tr>
                    <td class="font-medium pr-3 text-sm">Nombre:</td>
                    <td>{{ $winner->first_name }} </td>
                </tr>
				<tr>
                    <td class="font-medium pr-3 text-sm">Apellido:</td>
                    <td>{{ $winner->last_name }}</td>
                </tr>
                <tr>
                    <td class="font-medium pr-3 text-sm">Telefono:</td>
                    <td>{{ $winner->phone }}</td>
                </tr>
                <tr>
                    <td class="font-medium pr-3 text-sm">Email:</td>
                    <td>{{ $winner->email }}</td>
                </tr>
                <tr>
                    <td class="font-medium pr-3 text-sm">Cedula:</td>
                    <td>{{ $winner->cedula }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
