<div class="py-5">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Inducción
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl p-4 sm:rounded-lg overflow-hidden shadow-xl">


            <!-- Lista de items -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 mt-4">
                @forelse($inductions and $materials as $item)
                    <div class="bg-white sm:rounded-lg overflow-hidden shadow-lg p-4 space-y-4 transition duration-300 transform hover:scale-105">

                        <a href="{{ $item->url }}">
                            <p class="text-center text-xl font-semibold text-gray-800 hover:text-indigo-600 transition duration-300">{{ $item->title }}</p>
                        </a>

                        <div class="text-gray-900">
                            <strong>ID:</strong> {{ $item->id }}<br>
                            <strong>Fecha: </strong>{{ $item->date }}<br>
                            <strong>Lugar: </strong>{{ $item->location }}<br>
                            <strong>Hora de la inducción: </strong>{{ $item->time }}<br>
                            <strong>Responsable: </strong>{{ $item->responsible }}<br>
                            <strong>Duración: </strong>{{ $item->duration }}<br>

                            <strong>Archivo:</strong>
                            <a href="{{  $item->file_type }}" class="text-blue-500 underline">{{  $item->file_type }}</a><br>


                            <strong>Enlace de Meet o Zoom:</strong>
                            <a href="{{ $item->link }}" class="text-blue-500 underline">{{ $item->link }}</a><br>
                            {{-- <strong>Material:</strong> {{ $item->material_id }}<br> --}}
                            {{-- <strong>Participante: </strong>{{ $item->competitor_id }}<br> --}}
                            <td>
                                @if (!empty($item->getRoleNames()))
                                    @foreach ($item->getRoleNames() as $competitor)
                                        <p><span
                                                class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">
                                                {{ $competitor }}</span>
                                        </p>
                                    @endforeach
                                @endif
                            </td>
                        </div>

                        <div class="flex justify-between items-center">
                            <a href="{{ $item->enlace }}" class="bg-indigo-500 text-white py-2 px-4 rounded-full text-sm hover:bg-indigo-600 transition duration-300">Unirse a la Sesión</a>
                            <a href="#" class="text-indigo-500 hover:underline">Ver más</a>
                        </div>


                    </div>
                @empty
                    <div class="text-center py-4">No existe ningún registro coincidente</div>
                @endforelse
            </div>

            <div class="px-6 py-3">
                {{ $inductions->links() }}
            </div>
        </div>
    </div>
</div>


