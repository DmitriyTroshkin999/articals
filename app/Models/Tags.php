<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;

    /**
     * Получить статью, которой принадлежит тэг.
     */
    public function post()
    {
        return $this->belongsTo(Articles::class);
    }
}
