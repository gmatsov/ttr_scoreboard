<?php

namespace App\Http\Livewire;

use App\Models\Player;
use Livewire\Component;

class CreatePlayerForm extends Component
{
    public $name;
    public $success;


    protected $rules = [
        'name' => 'required|unique:players,name|min:3',
    ];


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function saveContact()
    {
        $validatedData = $this->validate();

        Player::create($validatedData);

        $this->success = 'Успешно създаден играч ' . $this->name . '!';

        $this->clearFields();
    }


    private function clearFields()
    {
        $this->name = '';
    }

    public function render()
    {
        return view('livewire.create-player-form');
    }
}
