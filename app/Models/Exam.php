<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $table = "exam";
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['exam_id', 'list', 'topic_id'];
}
