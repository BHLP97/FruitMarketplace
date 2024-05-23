<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'icon',
        'type',
        'slug',
        'image_id',
        'parent_id'
    ];
    public function parentCategory(){
        return $this->belongsTo(Category::class, "parent_id");
    }
    public function childs():HasMany{
        return $this->hasMany(Category::class, "parent_id");
    }
    public function getProductsInCategory(): hasMany{
        return $this->hasMany('App\Models\Product', 'category_id', 'id');
    }
    public function getPostsInCategory(): hasMany{
        return $this->hasMany('App\Models\Post', 'category_id', 'id');
    }
}

