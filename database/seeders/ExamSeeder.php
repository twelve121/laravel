<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("exam")->insert([
            'topic_id' => 1,
            'list' => '1,2,3',
            'exam_id' => "WORD",
        ]);
        DB::table("exam")->insert([
            'topic_id' => 2,
            'list' => '3',
            'exam_id' => "JS",
        ]);
    }
}
