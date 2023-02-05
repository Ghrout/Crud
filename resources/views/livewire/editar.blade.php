<div >
        <x-jet-dialog-modal wire:model="open">
            <x-slot name="title">
                ASDA
            </x-slot>
            <x-slot name="content">
                <div class="mb-4">
                    <x-jet-label value="Razon Social" />
                    <x-jet-input wire:model="post.razon_social" type="text" class="w-full" />
                </div>
                <div class="mb-4">
                    <x-jet-label value="Nombre Comercial" />
                    <x-jet-input wire:model="post.nombre_comercial" type="text" class="w-full" />
                </div>
                <div class="mb-4">
                    <x-jet-label value="Nit o ID" />
                    <x-jet-input wire:model="post.nit_o_id" type="text" class="w-full" />
                </div>
                <div class="mb-4">
                    <x-jet-label value="Telefono" />
                    <x-jet-input wire:model="post.telefono" type="text" class="w-full" />
                </div>
                <div class="mb-4">
                    <x-jet-label value="Correo" />
                    <x-jet-input wire:model="post.correo" type="text" class="w-full" />
                </div>
                <div class="mb-4">
                    <x-jet-label value="Sitio Web" />
                    <x-jet-input wire:model="post.sitio_web" type="text" class="w-full" />
                </div>
            </x-slot>
            <x-slot name="footer">
                    <x-jet-secondary-button wire:click="$set('open',false)">
                        Cancelar
                    </x-jet-secondary-button>
                    <x-jet-danger-button wire:click="save" wire:loading.attr="disabled" class="disabled:opacity-25">
                        Actualizar
                    </x-jet-danger-button>
                </x-slot>
        </x-jet-dialog-modal>
</div>
