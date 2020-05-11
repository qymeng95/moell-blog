<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ArticleTag
 *
 * @property int $article_id
 * @property int $tag_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleTag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleTag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleTag query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleTag whereArticleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleTag whereTagId($value)
 * @mixin \Eloquent
 */
class ArticleTag extends Model
{

    protected $fillable = ['article_id', 'tag_id'];

    public $timestamps = false;

}
