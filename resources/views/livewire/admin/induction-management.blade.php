@extends('adminlte::page')

@section('title', 'Lista de roles')

@section('content_header')
    <div class="row">
        <div class="col-md-6">
            <h1>Lista de roles</h1>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ route('admin.admin.roles.create') }}" class="btn btn-sm btn-primary">Nuevo Plan</a>
        </div>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 mt-4">
                @forelse($inductions as $item)
                    <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg p-4 space-y-4">
                        <img src="{{ $item->inductions }}" class="w-full h-48 object-cover mb-4 rounded-md" alt="inductions">

                        <div class="text-gray-900">
                            <strong>ID:</strong> {{ $item->id }}<br>
                            <strong>Fecha:</strong> {{ $item->date }}<br>
                            <strong>Encargado:</strong> {{ $item->location }}<br>
                            <strong>Hora:</strong> {{ $item->time }}<br>
                            <strong>Tema Principal:</strong> {{ $item->responsible }}<br>
                            <strong>Duración:</strong> {{ $item->duration }}<br>
                            <strong>Enlace de Meet o Zoom:</strong>
                            <a href="{{ $item->link }}" class="text-blue-500 underline">{{ $item->link }}</a><br>
                            <strong>Material:</strong> {{ $item->material_id }}<br>
                            <strong>Participante:</strong> {{ $item->competitor_id }}<br>
                        </div>

                        <div class="flex justify-between">
                            <a href="{{ $item->enlace }}" class="btn btn-primary btn-sm">Unirse a la Sesión</a>
                            <a href="#" class="btn btn-primary btn-sm">Ver más</a>
                        </div>

                        <div class="flex gap-1 justify-end">
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
                {{ $inductions->links() }}
            </div>
        </div>
    </div>
@stop
