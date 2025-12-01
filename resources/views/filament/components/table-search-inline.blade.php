<form wire:submit.prevent="setTableSearch" class="flex items-center space-x-2">
    <input type="text" wire:model.lazy="tableSearch" placeholder="Cari..." class="filament-input w-48" />
    <button type="submit" class="filament-button filament-button-size-sm filament-button-color-primary">Cari</button>
</form>
