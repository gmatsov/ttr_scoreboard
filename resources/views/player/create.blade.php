<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Създаване на играч') }}
        </h2>
    </x-slot>

    @livewire('create-player-form')
</x-app-layout>
