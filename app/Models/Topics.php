<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topics extends Model
{
    use HasFactory;

    protected $table = "topics";
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['topic_id', 'title', 'thumbnail', 'description', 'user_id'];
}
