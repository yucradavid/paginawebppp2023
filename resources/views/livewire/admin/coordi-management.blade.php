<div class="py-5">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            GESTION COORDINADOR
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-slate-900 overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 dark:bg-gray-800/50 dark:bg-gradient-to-bl">
            <div class="flex items-center justify-between dark:text-gray-400">
                <!-- Input de búsqueda -->
                <div class="mb-2 w-full">
                    <x-input icon="search" placeholder="Buscar registro" wire:model.live="search" />
                </div>
                <!-- Boton nuevo -->
                <div class="mb-1 ml-10">
                    <x-button primary label="Nuevo" icon="plus" wire:click="create()" spinner="create" />
                    @if($isOpen)
                        @include('livewire.admin.coordi-create')
                    @endif
                </div>
                    <h2></h2>        <!-- PRUEBA -->
                <div>
                    <x-button href="{{route('admin.voting-result')}}"  icon="printer" label="Imprimir   " target="_blank" teal/>
                </div>

            </div>

            <!-- Lista de items -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 mt-4">
                @forelse($practicantes and $supervisors and $practicings as $item)
                    <div class="bg-gray-200 overflow-hidden shadow-lg sm:rounded-lg p-4 space-y-4">
                        <h2>DATOS</h2>
                        <div class="text-gray-900">
                            <strong>ID:</strong> {{ $item->id }}<br>
                            <strong>Practicante: </strong>{{ $item->practicante }}<br>
                            <strong>Supervisor: </strong>{{ $item->supervisor }}<br>
                            <strong>Etapa: </strong>{{ $item->etapa }}<br>
                            <strong>Empresa: </strong>{{ $item->empresa }}<br>
                            <strong>Comunicarse: </strong>{{ $item->cellphone }}<br>
                            <strong>creado:</strong> {{ $item->created_at }}<br>
                            <strong>actualizado: </strong>{{ $item->updated_at }}<br>
                        </div>
                        <div class="flex justify-between">
                            <a href="{{ $item->enlace }}" class="btn btn-danger btn-sm">Ver Calificaciones</a>

                            <x-nav-link href="{{ route('admin.evaluation') }}" :active="request()->routeIs('admin.evaluation')">
                                {{ __('Mas') }}
                            </x-nav-link>
                        </div>
                        <div class="flex gap-1 justify-end">

                            <div>
                                <x-button href="{{route('admin.voting-result2')}}"  icon="printer" label="Imprimir   " target="_blank" teal/>
                            </div>
                            <x-button.circle primary icon="pencil" wire:click="edit({{ $item }})" />

                            <x-button.circle negative icon="x"
                                x-on:confirm="{
                                    title: 'Seguro que deseas eliminar?',
                                    icon: 'warning',
                                    method: 'destroy',
                                    params: {{ $item }}
                                }" />
                        </div>
                    </div>
                @empty
                    <div class="text-center py-4">No existe ningún registro coincidente</div>
                @endforelse
            </div>

            <div class="px-6 py-3">
                {{ $practicantes->links() }}
            </div>
        </div>
    </div>
</div>
