<?php

// app/Http/Controllers/ChallengeController.php

namespace App\Http\Controllers;

use App\Models\Challenge;
use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    public function create()
    {
        return view('challenge.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'challenge_id' => 'required|unique:challenges',
            'starting_date' => 'required|date',
            'ending_date' => 'required|date|after:starting_date',
            'duration_per_challenge' => 'required|integer',
            'number_of_questions' => 'required|integer',
        ]);

        Challenge::create($validatedData);

        return redirect()->route('challenges.create')->with('success', 'Challenge settings created successfully.');
    }

    public function edit(Challenge $challenge)
    {
        return view('challenge.edit', compact('challenge'));
    }

    public function update(Request $request, Challenge $challenge)
    {
        $validatedData = $request->validate([
            'challenge_id' => 'required|unique:challenges,' . $challenge->id,
            'starting_date' => 'required|date',
            'ending_date' => 'required|date|after:starting_date',
            'duration_per_challenge' => 'required|integer',
            'number_of_questions' => 'required|integer',
        ]);

        $challenge->update($validatedData);

        return redirect()->route('challenges.edit', $challenge->id)->with('success', 'Challenge settings updated successfully.');
    }
}
