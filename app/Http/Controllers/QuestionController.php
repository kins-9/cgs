<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
class QuestionController extends Controller
{
     public function create(Course $course)
    {
        return view('question.create', compact('course'));
    }

    public function store(Course $course)
    {
        $data = request()->validate([
            'question.question' => 'required',
            'answers.*.answer' => 'required',
        ]);

        $question = $course->questions()->create($data['question']);
        $question->answers()->createMany($data['answers']);

        return redirect('/course/'.$course->id);
    }
}
