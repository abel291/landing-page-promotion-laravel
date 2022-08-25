<div>
    <section class="w-full bg-white" id="wrapper">

        <div class="mx-auto max-w-7xl">
            <div class="flex flex-col lg:flex-row">
                <div class="relative w-full bg-cover lg:w-6/12 bg-gradient-to-r from-white via-white to-gray-100">
                    <div class="relative flex flex-col items-center justify-center w-full h-full px-10 my-20 lg:my-0">
                        <div class="flex flex-col items-start space-y-8 tracking-tight lg:max-w-3xl">
                            <div class="relative">
                                <p class="mb-2 font-medium text-gray-700 uppercase">Promocion</p>
                                <h2 class="text-5xl font-bold text-gray-900 xl:text-6xl">Llegó el momento de tener el
                                    auto que siempre quisiste</h2>
                            </div>
                            <p class="text-2xl text-gray-700">Puedes ganar un auto con un gran diseño y todo lo que necesitas para tu día a día: confort, estilo y performance. </p>

                        </div>
                    </div>
                </div>

                <div class="w-full bg-white lg:w-6/12">
                    <div class="flex flex-col items-start justify-start w-full h-full p-10 lg:p-16">
                        <h4 class="w-full text-3xl font-bold">Registro</h4>

                        <div class="my-3 w-full block">
                            <x-notification />
                        </div>

                        <div class="relative w-full  grid grid-cols-2 gap-4">

                            <div class="relative">
                                <label class="font-medium text-gray-900">Nombre</label>
                                <input type="text" wire:model.defer="promotion.first_name"
                                    class="block w-full px-3 py-3 mt-1 text-lg placeholder-gray-400 bg-gray-200 focus:outline-none focus:ring-4 focus:ring-green-500 focus:ring-opacity-50 rounded"
                                    placeholder="Ingrese su Nombre">
                                @error('promotion.first_name')
                                    <span class="text-red-500 text-sm font-medium">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="relative">
                                <label class="font-medium text-gray-900">Apellido</label>
                                <input type="text" wire:model.defer="promotion.last_name"
                                    class="block w-full px-3 py-3 mt-1 text-lg placeholder-gray-400 bg-gray-200 focus:outline-none focus:ring-4 focus:ring-green-500 focus:ring-opacity-50 rounded"
                                    placeholder="Ingrese su Apellido">
                                @error('promotion.last_name')
                                    <span class="text-red-500 text-sm font-medium">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="relative col-span-2">
                                <label class="font-medium text-gray-900">Correo Electronico</label>
                                <input type="text" wire:model.defer="promotion.email"
                                    class="block w-full px-3 py-3 mt-1 text-lg placeholder-gray-400 bg-gray-200 focus:outline-none focus:ring-4 focus:ring-green-500 focus:ring-opacity-50 rounded"
                                    placeholder="Enter Your Email Address">
                                @error('promotion.email')
                                    <span class="text-red-500 text-sm font-medium">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="relative">
                                <label class="font-medium text-gray-900">Cédula</label>
                                <input type="text" wire:model.defer="promotion.cedula"
                                    class="block w-full px-3 py-3 mt-1 text-lg placeholder-gray-400 bg-gray-200 focus:outline-none focus:ring-4 focus:ring-green-500 focus:ring-opacity-50 rounded"
                                    placeholder="Cedula">
                                @error('promotion.cedula')
                                    <span class="text-red-500 text-sm font-medium">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="relative">
                                <label class="font-medium text-gray-900">Telefono</label>
                                <input type="text" wire:model.defer="promotion.phone"
                                    class="block w-full px-3 py-3 mt-1 text-lg placeholder-gray-400 bg-gray-200 focus:outline-none focus:ring-4 focus:ring-green-500 focus:ring-opacity-50 rounded"
                                    placeholder="Telefono">
                                @error('promotion.phone')
                                    <span class="text-red-500 text-sm font-medium">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="relative col-span-2">
                                <label class="font-medium text-gray-900">Departamento</label>
                                <select wire:model="selectedDepartment"
                                    class="block w-full px-3 py-3 mt-1 text-lg placeholder-gray-400 bg-gray-200 focus:outline-none focus:ring-4 focus:ring-green-500 focus:ring-opacity-50 rounded"
                                    name="" id="">
                                    <option>Selecione el departamento</option>
                                    @foreach ($deparments as $deparment)
                                        <option value={{ $deparment->id }}>{{ $deparment->name }}</option>
                                    @endforeach
                                </select>
                                @error('selectedDepartment')
                                    <span class="text-red-500 text-sm font-medium">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="relative col-span-2">
                                <label class="font-medium text-gray-900">Ciudad</label>

                                <div wire:loading.remove>
                                    <select wire:model.defer="selectedCity"
                                        class="block w-full px-3 py-3 mt-1 text-lg placeholder-gray-400 bg-gray-200 focus:outline-none focus:ring-4 focus:ring-green-500 focus:ring-opacity-50 rounded"
                                        name="" id="" placeholder>

                                        <option>Selecione la ciudad</option>
                                        @foreach ($cities as $city)
                                            <option value={{ $city->id }}>{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="block w-full px-3 py-3 mt-1 text-lg placeholder-gray-400 bg-gray-200 focus:outline-none focus:ring-4 focus:ring-green-500 focus:ring-opacity-50 rounded"
                                    wire:loading wire:target="selectedDepartment">Cargando ciudades....</div>

                                @error('selectedCity')
                                    <span class="text-red-500 text-sm font-medium">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="relative col-span-2 my-4">

                                <div class="flex items-center">
                                    <input id="default-checkbox" type="checkbox" wire:model.defer="habeasData"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-checkbox"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Autorizo el
                                        tratamiento de mis datos de acuerdo con la
                                        finalidad establecida en la política de protección de datos personales</label>

                                </div>
                                @error('habeasData')
                                    <span class="block text-red-500 text-sm font-medium">{{ $message }}</span>
                                @enderror

                            </div>

                            <div class="relative">
                                <button 
									wire:click="store" 
									wire:loading.attr="disabled" 
									wire:target="store"
                                    wire:loading.class="bg-red-100 hover:bg-red-100"
                                    wire:loading.class.remove="bg-red-500 hover:bg-red-600"class="inline-block w-full px-3 py-3 text-lg font-medium text-center text-white transition duration-200 bg-red-500 hover:bg-red-600 ease rounded bg-red-500">
                                    <span wire:loading.remove wire:target="store">
                                        Registrarme
                                    </span>
                                    <span wire:loading wire:target="store">
                                        Registrando...
                                    </span>

                                </button>

                            </div>



                        </div>

                    </div>
                </div>
            </div>
        </div>


    </section>

</div>
