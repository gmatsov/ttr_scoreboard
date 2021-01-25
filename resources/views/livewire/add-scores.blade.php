<div class="mt-6">
    <form wire:submit.prevent="saveScore" class="sm:w-10/12 md:w-9/12     xl:w-1/2 mx-auto">
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
            <div>
                <label for="played_at" class="uppercase tracking-wide text-black text-xs font-bold mb-2 block">
                    Дата на игра
                </label>
                <input type="date" class="rounded-md  w-fu  ll md:w-1/2" wire:model="played_at">
                @error('played_at') <span class="error text-red-600">{{ $message }}</span> @enderror

            </div>
            <div class="mb-10 md:mb-0">
                <div class="m-3">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2 w-full md:w-1/2 inline-block mr-14">
                        Име на играч
                    </label>
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2 w-full md:w-1/3 ">
                        Резултат
                    </label>
                </div>
                @for($i =1; $i <= $max_players; $i++)
                    <div class="mb-2">
                        <select wire:model="player{{$i}}_id" class="rounded-md w-1/2 mr-14">
                            <option value=""></option>

                            @foreach($players as $player)
                                <option class="rounded-md"
                                        value="{{$player->id}}">{{$player->name}}</option>
                            @endforeach
                        </select>
                        <input type="number" wire:model="player{{$i}}_score" class="rounded-md w-1/3 ">
                        @error('player'.$i.'_id') <span class="error text-red-600">{{ $message }}</span> @enderror
                        @error('player'.$i.'_score')
                        <span class="error text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                @endfor

            </div>
            <div class="text-center mt-3">
                <button type="submit"
                        class="md:w-1/3 bg-yellow-700 text-white font-bold py-2 px-4 border-b-4 hover: border-yellow-600 hover:border-yellow-400 rounded-full">
                    Създай
                </button>
            </div>
        </div>
    </form>
</div>
