<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Question;

class Answer extends Model
{
    use HasFactory;

    protected $fillable =['question_id', 'answer_text'];

    public function question(){
        return $this->belongsTo(Question::class);
    }
}
