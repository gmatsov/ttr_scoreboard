<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Support\Facades\DB;

class ChartsController extends Controller
{
    public function gamesPlayedByYear()
    {
        $years = [];
        $years_count = DB::select('SELECT YEAR(played_at) AS year FROM games GROUP BY year(played_at)');

        for ($i = 0; $i < count($years_count); $i++) {
            array_push($years, $years_count[$i]->year);
        }

        $chart = array(
            "chart" => array(
                "labels" => 2,
            ),
            "datasets" => array()
        );

        for ($i = $this->startYear(); $i <= $this->endYear(); $i++) {
            $current_year_games = DB::select('SELECT COUNT(played_at) as count  FROM games where year(played_at) = ' . $i);
            $data = [];

            array_push($data, $current_year_games[0]->count);

            array_push($chart['datasets'], (array('name' => $i, 'values' => $data)));
        }
        return $chart;
    }

    public function topScores()
    {
        $players = Player::all();

        $chart = array(
            "chart" => array(
                "labels" => $this->years()
            ),
            "datasets" => array()
        );

        foreach ($players as $player) {
            $data = [];

            for ($i = $this->startYear(); $i <= $this->endYear(); $i++) {
                $player_top_score = DB::select('SELECT MAX(scores.score) AS score
                                                    FROM scores
                                                    LEFT JOIN players
                                                    ON scores.player_id = players.id
                                                    LEFT JOIN games
                                                    ON scores.game_id = games.id
                                                    WHERE players.id = ' . $player->id . '
                                                    AND games.created_by = ' . auth()->id() . '
                                                    AND YEAR(games.played_at) = ' . $i . '
                                                    ');
                array_push($data, $player_top_score[0]->score);
            }
            array_push($chart['datasets'], (array('name' => $player->name, 'values' => $data)));
        }

        return $chart;
    }

    public function worstScores()
    {

        $players = Player::all();

        $chart = array(
            "chart" => array(
                "labels" => $this->years()
            ),
            "datasets" => array()
        );

        foreach ($players as $player) {
            $data = [];

            for ($i = $this->startYear(); $i <= $this->endYear(); $i++) {
                $player_worst_score = DB::select('SELECT MIN(scores.score) AS score
                                                    FROM scores
                                                    LEFT JOIN players
                                                    ON scores.player_id = players.id
                                                    LEFT JOIN games
                                                    ON scores.game_id = games.id
                                                    WHERE players.id = ' . $player->id . '
                                                    AND games.created_by = ' . auth()->id() . '
                                                    AND YEAR(games.played_at) = ' . $i . '
                                                    ');
                array_push($data, $player_worst_score[0]->score);
            }
            array_push($chart['datasets'], (array('name' => $player->name, 'values' => $data)));
        }

        return $chart;
    }

    public function scoresByYear()
    {
        $players = Player::all();

        $chart = array(
            "chart" => array(
                "labels" => $this->years()
            ),
            "datasets" => array()
        );

        foreach ($players as $player) {
            $data = [];

            for ($i = $this->startYear(); $i <= $this->endYear(); $i++) {
                $player_worst_score = DB::select('SELECT SUM(scores.score) AS score
                                                    FROM scores
                                                    LEFT JOIN players
                                                    ON scores.player_id = players.id
                                                    LEFT JOIN games
                                                    ON scores.game_id = games.id
                                                    WHERE players.id = ' . $player->id . '
                                                    AND games.created_by = ' . auth()->id() . '
                                                    AND YEAR(games.played_at) = ' . $i . '
                                                    ');
                array_push($data, $player_worst_score[0]->score);
            }
            array_push($chart['datasets'], (array('name' => $player->name, 'values' => $data)));
        }

        return $chart;
    }

    public function rankingByYear()
    {

    }


    private function startYear()
    {
        return DB::select('SELECT min(YEAR(played_at)) AS year FROM games')[0]->year;
    }

    private function endYear()
    {
        return DB::select('SELECT max(YEAR(played_at)) AS year FROM games')[0]->year;
    }

    private function years(): array
    {
        $years = [];

        for ($i = $this->startYear(); $i <= $this->endYear(); $i++) {
            array_push($years, $i);
        }
        return $years;
    }
}
