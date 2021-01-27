<?php

namespace App\Http\Livewire;

use App\Models\Player;
use Livewire\Component;

class ShowPlayers extends Component
{
    public function render()
    {
        $players = Player::all();

        return view('livewire.show-players', compact('players'));
    }
}
