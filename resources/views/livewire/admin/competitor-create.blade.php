<x-modal.card title="Registro nuevo usuario" blur wire:model.defer="isOpen">
    <div class="my-2 mx-2 md:mr-2 md:mb-0 w-full">
        <x-input icon="user" label="Nombre Completo" wire:model="form.name" />
    </div>

    <div class="my-2 mx-2 md:mr-2 md:mb-0 w-full">
        <x-input icon="code" label="Código" wire:model="form.code" />
    </div>

    <div class="my-2 mx-2 md:mr-2 md:mb-0 w-full">
        <x-input icon="lock-closed" label="Ciclo" wire:model="form.cycle" />
    </div>

    <div class="my-2 mx-2 md:mr-2 md:mb-0 w-full">
        <x-input icon="lock-closed" label="Grupo" wire:model="form.cluster" />
    </div>

    <div class="my-2 mx-2 md:mr-2 md:mb-0 w-full">
        <x-input icon="check-circle" label="Asistencia" type="number" wire:model="form.attendance" min="0" max="1" />
    </div>





    <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancel" x-on:click="close()" />
            <x-button type="submit" primary label="Save" wire:click="store()" />
        </div>
    </x-slot>
</x-modal.card>
