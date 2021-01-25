<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Добавяне на резултати') }}
        </h2>
    </x-slot>

    @livewire('add-scores')
</x-app-layout>
