<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function create()
    {
        return view('player.create');
    }

    public function index()
    {
        return view('player.index');
    }

    public function store(Request $request)
    {
        Player::create($request->all());

        return redirect()->route('player.create')->with('success', 'Успещно създаден играч');
    }
}
