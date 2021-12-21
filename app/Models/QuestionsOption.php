<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionsOption extends Model
{
    use HasFactory;

    protected $table = "question_options";
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['id', 'option', 'correct', 'question_id'];
}
