<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;

    protected $table = "question";
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['id', 'question_text', 'topic_id'];
}
