<?php

namespace App\Http\Livewire;

use App\Models\Game;
use App\Models\Player;
use App\Models\Scores;
use Livewire\Component;

class AddScores extends Component
{
    public $played_at;
    public $player1_id;
    public $player2_id;
    public $player3_id;
    public $player4_id;
    public $player5_id;
    public $player1_score;
    public $player2_score;
    public $player3_score;
    public $player4_score;
    public $player5_score;
    public $success;

    protected $rules = [
        'played_at' => 'required|date',
        'player1_id' => 'required|integer',
        'player2_id' => 'required|integer',
        'player3_id' => 'nullable|integer',
        'player4_id' => 'nullable|integer',
        'player5_id' => 'nullable|integer',
        'player1_score' => 'required|integer',
        'player2_score' => 'required|integer',
        'player3_score' => 'nullable|integer',
        'player4_score' => 'nullable|integer',
        'player5_score' => 'nullable|integer',
    ];


    public function saveScore()
    {
        $validatedData = $this->validate();
        $game_data = [
            'played_at' => $validatedData['played_at'],
            'created_by' => auth()->id(),
        ];
        $game = Game::create($game_data);

        $scores_data = [
            'created_by' => auth()->id(),
            'game_id' => $game->id,
        ];

        for ($i = 1; $i <= GAME::MAX_PLAYER; $i++) {
            if ($validatedData['player' . $i . '_id'] && $validatedData['player' . $i . '_score']) {
                $scores_data = [
                    'created_by' => auth()->id(),
                    'game_id' => $game->id,
                    'player_id' => $validatedData['player' . $i . '_id'],
                    'score' => $validatedData['player' . $i . '_score'],
                ];
                Scores::create($scores_data);
            }
        }

        $this->success = 'Успешно добавена игра!';
        $this->clearFields();
    }


    private function clearFields()
    {
        $this->played_at = '';

        $this->player1_id = '';
        $this->player2_id = '';
        $this->player3_id = '';
        $this->player4_id = '';
        $this->player5_id = '';

        $this->player1_score = '';
        $this->player2_score = '';
        $this->player3_score = '';
        $this->player4_score = '';
        $this->player5_score = '';
    }

    public function render()
    {
        $players = Player::all();
        $max_players = 5;
        return view('livewire.add-scores', compact('players', 'max_players'));
    }
}
