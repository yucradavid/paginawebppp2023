<x-modal.card title="Registro nuevo usuario" blur wire:model.defer="isOpen">
    <div class="my-2 mx-2 md:mr-2 md:mb-0 w-full">
        <x-input icon="user" label="Nombre Completo" wire:model="form.name" />
    </div>
    <div class="my-2 mx-2 md:mr-2 md:mb-0 w-full">
        <x-input icon="inbox" label="Correo Electronico" wire:model="form.code" />
    </div>
    <div class="my-2 mx-2 md:mr-2 md:mb-0 w-full">
        <x-inputs.password icon="lock-closed" label="Contraseña 🙈" wire:model="form.cycle" />
    </div>
    <div class="my-2 mx-2 md:mr-2 md:mb-0 w-full">
        <x-inputs.password icon="lock-closed" label="Contraseña 🙈" wire:model="form.cluster" />
    </div>




    <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancel" x-on:click="close()" />
            <x-button type="submit" primary label="Save" wire:click="store()" />
        </div>
    </x-slot>
</x-modal.card>
