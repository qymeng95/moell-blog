<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Navigation
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property int $state 0-正常显示;1-隐藏
 * @property int $sequence 排序
 * @property int $nav_type 导航类型;0-自定义;1-分类导航
 * @property int $article_cate_id 文章分类id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category $category
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Navigation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Navigation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Navigation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Navigation whereArticleCateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Navigation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Navigation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Navigation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Navigation whereNavType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Navigation whereSequence($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Navigation whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Navigation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Navigation whereUrl($value)
 * @mixin \Eloquent
 */
class Navigation extends Model
{

    protected $fillable = ['name','url','sequence','state', 'article_cate_id', 'nav_type'];

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'article_cate_id', 'id');
    }

}
