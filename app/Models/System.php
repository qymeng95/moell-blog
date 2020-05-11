<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\System
 *
 * @property int $id
 * @property string $key
 * @property string $value
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System whereValue($value)
 * @mixin \Eloquent
 */
class System extends Model
{
    protected $fillable = ['key', 'value'];

    public $timestamps  = false;

    public static function keyValue($key)
    {
        return optional(System::where('key', $key)->first())->value;
    }

    public static function optionList()
    {
        $list = System::all(['key', 'value']);
        $system = call_user_func(function () {
            $init = [];
            $config = array_flip(config('blog.system_key'));
            foreach ($config as $key => $value) {
                $init[$key] = '';
            }
            return $init;
        });

        foreach ($list as $item) {
            $system[$item['key']]  = $item['value'];
        }

        return $system;
    }
}
