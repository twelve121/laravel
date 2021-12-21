<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $table = "result";
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['result_id', 'exam_id', 'user_id', 'listAns', 'score'];
}
