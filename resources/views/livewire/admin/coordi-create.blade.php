<x-modal.card title="Registro nuevo Practicante" blur wire:model.defer="isOpen">


    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-native-select
        icon="list-bullet"
            label="Selecione Practicante"
            placeholder="Ver Alumnos"
            :options="$practicings->pluck('name')"
            wire:model="form.practicante"        />
    </div>


{{--<div class="mb-2 md:mb-0 w-full">
        <x-label value="Nombre del Estudiante" class="font-bold text-left"/>
        <select wire:model.defer="form.practicante" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full">
            <option selected>Seleccione opción</option>
            @foreach ($practicantes as $practicante)
                <option value="{{$practicante->id}}">{{$practicante->practicante}}</option>
            @endforeach
        </select>
        <x-input-error for="form.practicante"/>
    </div>


--}}

<div class="my-2 md:mr-2 md:mb-0 w-full">
    <x-native-select
    icon="list-bullet"
        label="Selecione supervisor"
        placeholder="Ver Supervisores"
        :options="$supervisors->pluck('name')"
        wire:model="form.supervisor"        />
</div>


    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-inputs.number label="EN QUE ETAPA DE SUPERVISION SE ENCUENTRA" wire:model="form.etapa"/>
    </div>

    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input icon="briefcase" label="Nombre EMPRESA" placeholder="coordenadas de la empresa" wire:model="form.empresa"/>
    </div>

    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input icon="briefcase" label="Nro Celular" placeholder="ingrese numero" wire:model="form.cellphone"/>
    </div>



    <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancel" x-on:click="close()" />
            <x-button primary label="Save" wire:click="store()" />
        </div>
    </x-slot>


</x-modal.card>
