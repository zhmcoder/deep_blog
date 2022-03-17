<?php


namespace Andruby\DeepBlog\Models;


use App\Models\AdminUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    public function author()
    {
        return $this->hasOne(AdminUser::class, 'id', 'oper_user_id')
            ->select(['id', 'name']);
    }
    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id')
            ->select(['id', 'title']);
    }
}