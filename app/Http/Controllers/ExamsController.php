<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Topics;
use App\Models\Questions;
use App\Models\QuestionsOption;

use DB;

class ExamsController extends Controller
{
    public function index(){
        // $exam = DB::select("
        //     SELECT question.id, question.topic_id, question.question_text, question_options.id, question_options.option, question_options.correct 
        //     FROM question, question_options 
        //     WHERE question.id = question_options.question_id");

        $topic = Topics::all();
        $question = Questions::all();
        $question_option = QuestionsOption::all();
        
        return view ('dashboard.user.exam', compact('question', 'question_option', 'topic'));
    }
}
