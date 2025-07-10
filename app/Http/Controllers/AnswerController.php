<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Answer;
use App\Models\Question;

class AnswerController extends Controller
{
    public function store(Request $request, $id){
        $request->validate([
            'answer_text' => 'required|string'
        ]);

        $question = Question::findOrFail($id);

        $question->answers()->create([
            'answer_text' => $request->answer_text,
        ]);

        return redirect()->back()->with('success', 'Answer added successfully!');
    }
}
