<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    /**
     * App\Models\Articles
     *
     * @property int $id
     * @property string $theme
     * @property string $artmessage
     * @property string $img
     * @property int $views
     * @property int $likes
     * @property string $slug
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Tags[] $tags
     * @property-read int|null $tags_count
     * @method static \Database\Factories\ArticlesFactory factory(...$parameters)
     * @method static \Illuminate\Database\Eloquent\Builder|Articles newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Articles newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Articles query()
     * @method static \Illuminate\Database\Eloquent\Builder|Articles whereArtmessage($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Articles whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Articles whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Articles whereImg($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Articles whereLikes($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Articles whereSlug($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Articles whereTheme($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Articles whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Articles whereViews($value)
     */

    public function tags()
    {
        return $this->hasMany(Tags::class);
    }
}
