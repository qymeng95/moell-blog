<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Page
 *
 * @property int $id
 * @property string $title 页面标题
 * @property string|null $link_alias 链接别名
 * @property string $keyword keywords
 * @property string $desc 描述
 * @property string|null $content 页面markdown格式
 * @property string|null $html_content 页面html
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereHtmlContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereKeyword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereLinkAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Page extends Model
{
    //protected $fillable = [];

    protected $guarded  = ['id'];

}
