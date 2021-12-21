<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Topics;
use App\Models\Exam;
use App\Models\Result;
use App\Models\Questions;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function index(){
        $topic = Topics::all();
        return view ('dashboard.user.index', compact('topic'));
    }
    
    function profile(){
        return view ('dashboard.user.profile');
    }

    function settings(){
        return view ('dashboard.user.settings');
    }
    
    function exam($id)
    {
        $exam = Exam::where('exam_id',$id)->first();
        $list = explode(",",$exam->list);
        $listQuest = [];
        foreach ($list as $key => $value) {
            $question = Questions::where('question_id',$value)->first();
            array_push($listQuest,[
                "question_id" => $question->question_id,
                "question" => $question->question,
                "answer" => json_decode($question->answer,true)
            ]);
        }
        return view ('dashboard.user.exam', compact('listQuest'));
    }

    public function submitExam(Request $request)
    {
        $id = substr(url()->previous(),32);
        $score = 0;
        $listAns = $request->input();
        unset($listAns["_token"]);
        foreach ($listAns as $key => $value) {
            $question = Questions::where('question_id',$key)->first();
            if($value == json_decode($question->answer,true)['ans']) $score+=0.5;
            // else $score-=1;
        }
        $result = Result::create([
            'exam_id' => $id,
            'user_id' => Auth()->user()->id,
            'listAns' => json_encode($listAns),
            'score' => $score
        ]);
        return redirect()->route('dashboard.user.result2', $result->id);

    }
    
    public function resultExam($id)
    {
        $result = Result::where('result_id',$id)->first();
        if($result->user_id != Auth()->user()->id) return redirect()->back();
        $exam = Exam::where('exam_id',$result->exam_id)->first();
        $list = explode(",",$exam->list);
        $listQuest = [];
        $listAns = json_decode($result->listAns,true);
        foreach ($list as $key => $value) {
            $question = Questions::where('question_id',$value)->first();
            $ans = json_decode($question->answer,true);
            array_push($listQuest,[
                "question_id" => $question->question_id,
                "question" => $question->question,
                "answer" => $ans,
                "choose" =>  $listAns[$question->question_id],
                "score" => $listAns[$question->question_id] == $ans['ans']?"0,5":"0,00"
            ]);
        }
        $score = $result->score;
        return view ('dashboard.user.result2', compact('listQuest','score'));
    }
}
