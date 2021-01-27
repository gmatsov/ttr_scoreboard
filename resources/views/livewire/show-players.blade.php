<div class="mt-6 bg-white shadow-md rounded md:px-8 pt-6 pb-8 mb-4 flex flex-col md:w-9/12 mx-auto">
    <div>
        <div class="uppercase font-bold text-center">
            <div class="inline-block text-left w-1/6">{{__('Име')}}</div>
            <div class="inline-block w-1/6">{{__('Игри')}}</div>
            <div class="inline-block w-1/6">{{__('Общо точки')}}</div>
            <div class="inline-block w-1/6">{{__('Макс. точки')}}</div>
            <div class="inline-block w-1/6">{{__('Мин. точки')}}</div>
        </div>
        @foreach($players as $player)
            <div class=" items-center text-center p-1 border-b-2">
                <div class="inline-block text-left w-1/6">
                    {{$player->name}}
                </div>
                <div class="inline-block w-1/6">
                    {{count($player->scores)}}
                </div>

                <div class="inline-block w-1/6">
                    {{$player->scores->sum('score')}}
                </div>
                <div class="inline-block w-1/6">
                    {{$player->scores->max('score')}}

                </div>
                <div class="inline-block w-1/6">
                    {{$player->scores->min('score')}}

                </div>

            </div>
        @endforeach
    </div>
</div>
