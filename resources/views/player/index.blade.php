<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Играчи') }}
        </h2>
    </x-slot>

    @livewire('show-players')
</x-app-layout>
