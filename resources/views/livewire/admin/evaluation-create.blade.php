<x-modal.card wire:model.defer="isOpen">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Registro de Nueva Inducción
        </h2>
    </x-slot>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input type="textarea" label="Pregunta para el Participante" placeholder="Escribe tu pregunta aquí..." wire:model="form.question"/>
    </div>

    <!-- Pregunta para el participante -->
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Pregunta para el Participante" placeholder="Ejemplo:" wire:model="form.qualification"/>
    </div>

    <!-- Estado de la evaluación -->
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-select label="Estado de la Evaluación" :options='json_decode("[\"Entrada\", \"Intermedio\", \"Final\"]")' wire:model="form.state"/>
    </div>


    <!-- Nombre del participante -->
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Nombre del Participante" placeholder="Ejemplo: " wire:model="form.competitor_id"/>
    </div>

    <!-- Fecha de la evaluación -->
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Fecha de la Evaluación" placeholder="Ejemplo: " wire:model="form.evaluation_date"/>
    </div>

    <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancelar" x-on:click="close()" />
            <x-button primary label="Guardar" wire:click="store()" />
        </div>
    </x-slot>
</x-modal.card>
