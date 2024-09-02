<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerOption extends Model
{
    use HasFactory;

    public function answer(): BelongsTo
    {
        return $this->belongsTo(Answer::class);
    }

    public function option(): BelongsTo
    {
        return $this->belongsTo(SurveyOptions::class);
    }
}
