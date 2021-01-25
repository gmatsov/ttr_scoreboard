<div class="mt-6">
    <form wire:submit.prevent="saveContact" class="md:w-1/4 mx-auto">
        @if ($success)
            <div class="inline-flex w-full  overflow-hidden bg-white rounded-lg shadow-sm">
                <div class="flex items-center justify-center w-12 bg-green-500">
                </div>
                <div class="px-3 py-2 text-left">
                    <span class="font-semibold text-green-500">Успех</span>
                    <p class="mb-1 text-sm leading-none text-gray-500">{{ $success }}</p>
                </div>
            </div>
        @endif
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
            <div class="mb-10 md:mb-0">
                <label class="uppercase tracking-wide text-black text-xs font-bold mb-2"
                       for="company">
                    Име на играч
                </label>
                <input class="md:w-full bg-gray-200 text-black border border-gray-200 rounded py-3 mb-3"
                       wire:model="name"
                       type="text">
                @error('name') <span class="error text-red-600">{{ $message }}</span> @enderror
            </div>
            <button type="submit"
                    class="md:w-full bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full">
                Създай
            </button>
        </div>
    </form>
</div>
