<x-filament-widgets::widget>
    <x-filament::section>
        <form wire:submit="submit">
            {{ $this->form }}

            <div class="mt-4 flex justify-end">
                <x-filament::button type="submit">
                    Simpan Perubahan
                </x-filament::button>
            </div>
        </form>
    </x-filament::section>
</x-filament-widgets::widget>
