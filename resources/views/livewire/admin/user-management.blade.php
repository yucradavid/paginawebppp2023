@extends('adminlte::page')
@section('title', 'Coders Free')
@section('content_header')
<h1>Coders Free</h1>
@stop

@section('content')
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, inventore. Iusto consequuntur sequi impedit quia! Debitis excepturi deleniti voluptate ratione iste iure delectus, magnam quidem placeat sapiente, consequatur laboriosam tempore.</p>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!');</script>
@stop

<div class="py-5">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Vehiculos
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div
            class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 dark:bg-gray-800/50 dark:bg-gradient-to-bl">
            <div class="flex items-center justify-between dark:text-gray-400">
                <!--Input de busqueda   -->
                <div class="mb-2 w-full">
                    <x-input icon="search" placeholder="Buscar registro" wire:model.live="search" />
                </div>
                <!--Boton nuevo   -->
                <div class="mb-1 ml-10">
                    <x-button primary label="Nuevo" icon="plus" wire:click="create()" spinner="create"></x-button>
                    @if ($isOpen)
                        @include('livewire.admin.user-create')
                    @endif
                </div>
            </div>
            <!--Tabla lista de items   -->
            <div class="shadow overflow-x-auto border-b border-gray-200 sm:rounded-lg">
                <table class="w-full divide-y divide-gray-200 table-auto">
                    <thead class="bg-indigo-500 text-white">
                        <tr class="text-left text-xs font-bold uppercase">
                            <td scope="col" class="px-6 py-3">ID</td>
                            <td scope="col" class="px-6 py-3">Nombre</td>
                            <td scope="col" class="px-6 py-3">Año</td>
                            <td scope="col" class="px-6 py-3">Roles</td>
                            <td scope="col" class="px-6 py-3 text-center">Opciones</td>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:text-gray-400">
                        @foreach ($users as $user)
                            <tr class="text-sm font-medium text-gray-900">
                                <td class="px-6 py-4">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-500 text-white">
                                        {{ $user->id }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 dark:text-gray-400">{{ $user->name }}</td>
                                <td class="px-6 py-4 dark:text-gray-400">{{ $user->email }}</td>

                                <td>
                                    @if (!empty($user->getRoleNames()))
                                        @foreach ($user->getRoleNames() as $rol)
                                            <p><span
                                                    class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">
                                                    {{ $rol }}</span>
                                            </p>
                                        @endforeach
                                    @endif
                                </td>
                                <td class="px-6 py-4 flex gap-1 justify-end" style="margin-right: 135px">
                                    <x-button.circle primary icon="pencil" wire:click="edit({{ $user }})" />
                                    <x-button.circle negative icon="x"
                                        x-on:confirm="{
                            title: 'Seguro que deseas eliminar?',
                            icon: 'warning',
                            method: 'destroy',
                            params: {{ $user }}
                        }" />
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @if (!$users->count())
                No existe ningun registro coincidente
            @endif
            <div class="px-6 py-3">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>
