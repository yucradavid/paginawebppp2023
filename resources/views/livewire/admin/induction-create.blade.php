<x-modal.card wire:model.defer="isOpen">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Registro nueva inducción
        </h2>
    </x-slot>

    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <label for="fecha_induccion" class="block text-sm font-medium text-gray-700">Fecha de la Inducción</label>
        <input type="date" id="fecha_induccion" name="fecha_induccion" wire:model="form.date" class="mt-1 p-2 border rounded-md w-full" onchange="formatDateInput(this)">
    </div>

    <script>
        function formatDateInput(input) {
            const dateValue = input.value;
            if (dateValue) {
                const dateObj = new Date(dateValue);
                const formattedDate = `${dateObj.getFullYear()}-${(dateObj.getMonth() + 1).toString().padStart(2, '0')}-${dateObj.getDate().toString().padStart(2, '0')}`;
                input.value = formattedDate;
            }
        }
    </script>

    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Lugar de la Inducción" placeholder="Ejemplo: Aula Magna" wire:model="form.location"/>
    </div>

    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Responsable de la Inducción" placeholder="Ejemplo: Ing. Juan Pérez" wire:model="form.responsible"/>
    </div>

    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <label for="hora" class="block text-sm font-medium text-gray-700">Hora</label>
        <div class="flex items-center">
            <input type="time" id="hora" name="hora" wire:model="form.time" class="mt-1 p-2 border rounded-md w-full" onchange="updateTime(this)">
            <button type="button" class="ml-2 px-4 py-2 bg-gray-300 hover:bg-gray-400 rounded-md" onclick="resetTime()">Borrar</button>
        </div>
    </div>

    <script>
        function updateTime(input) {
            // Puedes realizar acciones adicionales si es necesario antes de actualizar el valor
            Livewire.emit('updateTime', input.value);
        }

        function resetTime() {
            Livewire.emit('resetTime');
        }
    </script>



    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Duración (en horas)" placeholder="Seleccione la duración" wire:model="form.duration"/>
    </div>

    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Material de Inducción" placeholder="Ejemplo: Presentación, PDF, etc." wire:model="form.material_id"/>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Participante" placeholder="Ejemplo juan jimanes" wire:model="form.competitor_id"/>
    </div>

    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Enlace de Zoom o Meet" placeholder="Ejemplo: https://www.zoom.com" wire:model="form.link"/>
    </div>

    <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancel" x-on:click="close()" />
            <x-button primary label="Save" wire:click="store()" />
        </div>
    </x-slot>
</x-modal.card>
