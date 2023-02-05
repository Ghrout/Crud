<div>

    {{-- Boton de accion --}}

    <x-jet-danger-button wire:click="$set('open',true)">
        + Nueva Empresa
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model="open">

        <x-slot name="title" class="text-center" >
            Crear empresa
        </x-slot>
        <x-slot name="content">
            En los siguientes recuadros puedes agregar la informacion solicitada para poder crear una nueva empresa.

            <div class="mb-4 py-5">
                <x-jet-label value="Razon Social" />
                <x-jet-input type="text" class="w-full" wire:model.defer="razon_social" />

                <x-jet-input-error for="razon_social" />
            </div>

            <div class="mb-4 py-0">
                <x-jet-label value="Nombre Comercial" />
                <x-jet-input type="text" class="w-full" wire:model.defer="nombre_comercial" />

                <x-jet-input-error for="nombre_comercial" />
            </div>

            <div class="mb-4">
                <x-jet-label value="NIT o ID" />
                <x-jet-input type="text" class="w-full" wire:model.defer="nit_o_id" />

                <x-jet-input-error for="nit_o_id" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Telefono" />
                <x-jet-input type="text" class="w-full" wire:model.defer="telefono" />

                <x-jet-input-error for="telefono" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Correo" />
                <x-jet-input type="text" class="w-full" wire:model.defer="correo" />

                <x-jet-input-error for="correo" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Sitio Web" />
                <x-jet-input type="text" class="w-full" wire:model.defer="sitio_web" />

                <x-jet-input-error for="sitio_web" />
            </div>
            <div wire:loading wire:target="image"
                class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">¡Cargando!</strong>
                <span class="block sm:inline">Espera un momento, mientras tu imagen es cargada.</span>
            </div>

            @if ($image)
            <img class="mb-4" src="{{ $image->temporaryUrl() }}" alt="">
            {{-- <img src="{{ Storage::url($posts->image) }}" alt=""> --}}
            @endif

            <div>
                <input type="file" wire:model="image" id="{{ $identificador }}">
                <x-jet-input-error for="image" />
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open',false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="save" wire:loading.attr="disabled" wire:target="save, image"
                class="disabled:opacity-25">
                Crear Empresa
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
