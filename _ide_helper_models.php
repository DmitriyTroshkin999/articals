<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
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
	class Articles extends \Eloquent {}
}

namespace App\Models{
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
	class Comments extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Menu
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Menu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Menu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Menu query()
 */
	class Menu extends \Eloquent {}
}

namespace App\Models{
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
	class Tags extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 */
	class User extends \Eloquent {}
}

