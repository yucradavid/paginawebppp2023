<div class="py-5">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Universidad Peruana Unión - Facultad de Ingeniería y Arquitectura - EP Ingeniería de Sistemas
        </h2>

        <div class="my-4">
            <p><strong>Instrucciones:</strong></p>
            <p>Este instrumento permitirá evaluar en el estudiante el logro de sus competencias de sus prácticas preprofesionales.</p>
            <p>Marque según su evaluación de [1 – 5] o NA en la columna de la derecha, considere:</p>
            <ul>
                <li><strong>5:</strong> Sobresaliente</li>
                <li><strong>4:</strong> Satisfactorio</li>
                <li><strong>3:</strong> Aceptable</li>
                <li><strong>2:</strong> Mínimo</li>
                <li><strong>1:</strong> Carece</li>
                <li><strong>NA:</strong> No aplica</li>
            </ul>
        </div>


    </x-slot>
    <div>
        <x-button href="{{route('voting-result')}}" icon="printer" target="_blank" label="imprimir" teal />
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 dark:bg-gray-800/50 dark:bg-gradient-to-bl">
            <div class="flex items-center justify-between dark:text-gray-400">
                <!-- Input de búsqueda -->
                <div class="mb-2 w-full">
                    <x-input icon="search" placeholder="Buscar registro" wire:model.live="search" />
                </div>
                <!-- Botón nuevo -->
                <div class="mb-1 ml-4 sm:ml-10">
                    <x-button primary label="Nuevo" icon="plus" wire:click="create()" spinner="create" />
                    @if ($isOpen)
                        @include('livewire.admin.evaluation-create')
                    @endif
                </div>
            </div>
            <!-- Tabla lista de items -->
            <div class="overflow-x-auto mt-4">
                <table class="w-full divide-y divide-gray-200 table-auto">
                    <thead class="bg-indigo-500 text-white">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-bold uppercase">
                                ID
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-bold uppercase">
                                Pregunta
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-bold uppercase">
                                Estado
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-bold uppercase">
                                ID Alumno
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-bold uppercase">
                                Fecha de Evaluación
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-bold uppercase">
                                Calificación
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-bold uppercase">
                                Opciones
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:text-gray-400">
                        @forelse ($evaluations as $item)
                            <tr class="text-sm font-medium text-gray-900">
                                <td class="px-6 py-4">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-500 text-white">
                                        {{ $item->id }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 dark:text-gray-400">{{ $item->comments }}</td>
                                <td class="px-6 py-4 dark:text-gray-400">{{ $item->state }}</td>
                                <td class="px-6 py-4 dark:text-gray-400">{{ $item->competitor_id }}</td>
                                <td class="px-6 py-4 dark:text-gray-400">{{ $item->evaluation_date }}</td>
                                <td class="px-6 py-4 dark:text-gray-400">
                                    {{ $item->qualification }}
                                </td>
                                <td class="px-6 py-4 dark:text-gray-400">
                                    <div class="flex gap-1 justify-end sm:mr-4">
                                        <x-button.circle primary icon="pencil" wire:click="edit({{ $item }})" />
                                        <x-button.circle negative icon="x"
                                            x-on:confirm="{
                                                title: 'Seguro que deseas eliminar?',
                                                icon: 'warning',
                                                method: 'destroy',
                                                params: {{ $item }}
                                            }" />
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="px-6 py-4 dark:text-gray-400">
                                    No existe ningún registro coincidente
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="px-6 py-3">
                {{ $evaluations->links() }}
            </div>
        </div>
    </div>
</div>
