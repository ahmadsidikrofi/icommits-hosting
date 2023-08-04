<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StoriesSection extends Model
{
    use SoftDeletes;
    use HasFactory;
    use Sluggable;

    protected $table = 'tb_stories';
    protected $guarded = [];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'stories_title',
            ]
        ];
    }

    public function kategori()
    {
        return $this->belongsToMany(KategoriStories::class, "kategori_stories", "stories_id", "kategori_id");
    }

    public function menu_navbar()
    {
        return $this->belongsTo(MenuNavbar::class, 'id_menu_navbar');
    }

    public function submenu_navbar()
    {
        return $this->belongsTo(SubMenuNavbar::class, 'id_submenu_navbar');
    }
}
