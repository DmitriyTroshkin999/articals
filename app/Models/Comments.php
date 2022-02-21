<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    /**
     * App\Models\Comments
     *
     * @property int $id
     * @property int $articles_id
     * @property string $subject
     * @property string $body
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @method static \Illuminate\Database\Eloquent\Builder|Comments newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Comments newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Comments query()
     * @method static \Illuminate\Database\Eloquent\Builder|Comments whereArticlesId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Comments whereBody($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Comments whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Comments whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Comments whereSubject($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Comments whereUpdatedAt($value)
     */
}
