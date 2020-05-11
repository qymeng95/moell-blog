<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Article
 *
 * @property int $id
 * @property string $title 文章标题
 * @property string $keyword keywords
 * @property string $desc 描述
 * @property string|null $content 文章内容,markdown格式
 * @property int $user_id 文章编写人,对应users表
 * @property int $cate_id 文章分类
 * @property int $comment_count 评论数量
 * @property int $read_count 阅读数量
 * @property int $status 文章状态：0-公开;1-私密
 * @property int $sort 排序
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $html_content 文章内容,html格式
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ArticleTag[] $articleTag
 * @property-read int|null $article_tag_count
 * @property-read \App\Models\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Tag[] $tag
 * @property-read int|null $tag_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereCateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereCommentCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereHtmlContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereKeyword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereReadCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereUserId($value)
 * @mixin \Eloquent
 */
class Article extends Model
{

    protected $table = 'articles';

    //protected $fillable = [];

    protected $guarded = ['id'];

    /**
     * 文章标签
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articleTag()
    {
        return $this->hasMany('App\Models\ArticleTag', 'article_id', 'id');
    }

    public function getStatusAttribute($value)
    {
        return $value == 1 ? '私密' : '公开';
    }

    /**
     * article 与 tag 多对多关联
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tag()
    {
        return $this->belongsToMany('App\Models\Tag','article_tags', 'article_id', 'tag_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'cate_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }


}
