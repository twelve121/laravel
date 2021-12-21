<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("questions")->insert([
            'question_id' => 1,
            'question' => "Trong MS Word, phím nào để xoá ký tự đúng trước con trỏ?",
            'answer' => '{"op1":"Page Down","op2":"Delete","op3":"Backspace","op4":"Insert","ans":"op3"}',
            'topic_id' => 1,
        ]);
        DB::table("questions")->insert([
            'question_id' => 2,
            'question' => "Trong MS Word, phím nào để xoá ký tự đúng sau con trỏ?",
            'answer' => '{"op1":"Page Down","op2":"Delete","op3":"Backspace","op4":"Insert","ans":"op2"}',
            'topic_id' => 1,
        ]);
        DB::table("questions")->insert([
            'question_id' => 3,
            'question' => "Trong MS Word, phím nào để tạo khoảng trống?",
            'answer' => '{"op1":"Space","op2":"Delete","op3":"Backspace","op4":"Insert","ans":"op1"}',
            'topic_id' => 1,
        ]);
    }
}
