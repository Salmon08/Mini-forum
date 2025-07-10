<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Answer;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    public function answers(){
        return $this->hasMany(Answer::class);
    }
}
