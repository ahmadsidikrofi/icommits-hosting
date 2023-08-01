<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;
    use HasFactory;
    use Sluggable;

    protected $table = 'tb_blog';
    protected $guarded = [];

    public function menu_navbar()
    {
        return $this->belongsTo(MenuNavbar::class, 'id_menu_navbar');
    }

    public function submenu_navbar()
    {
        return $this->belongsTo(SubMenuNavbar::class, 'id_submenu_navbar');
    }

    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'blog_title',
            ]
        ];
    }
}
