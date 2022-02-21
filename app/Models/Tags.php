<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;

    /**
     * App\Models\Tags
     *
     * @property int $id
     * @property int $articles_id
     * @property string $text
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \App\Models\Articles|null $post
     * @method static \Database\Factories\TagsFactory factory(...$parameters)
     * @method static \Illuminate\Database\Eloquent\Builder|Tags newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Tags newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Tags query()
     * @method static \Illuminate\Database\Eloquent\Builder|Tags whereArticlesId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Tags whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Tags whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Tags whereText($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Tags whereUpdatedAt($value)
     */

    /**
     * Получить статью, которой принадлежит тэг.
     */
    public function post()
    {
        return $this->belongsTo(Articles::class);
    }
}
