<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Question;
use App\Models\Answer;

class QuestionController extends Controller
{
    public function index(){
        $questions = Question::latest()->get();
        return Inertia::render('Questions/Index', [
            'questions' => $questions,
        ]);
    }

    public function create(){
        return Inertia::render('Questions/Create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|string|max:100',
            'description' => 'required|string|max:500',
        ]);

        Question::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('questions.index')->with('success', 'Question created successfully!');
    }

    public function show($id){
        $question = Question::with('answers')->findOrFail($id);
        return Inertia::render('Questions/Show', [
            'question' => $question
        ]);
    }
}
