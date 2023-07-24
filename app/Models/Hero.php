<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hero extends Model
{
    use HasFactory;
    use Sluggable;
    use SoftDeletes;

    protected $table = "tb_hero";
    protected $guarded = [];
    // protected $fillable = ['title_hero', 'mini_title', 'deskripsi', 'link_button', 'image_background', 'image_right', 'id_menu_navbar', 'id_submenu_navbar'];
    protected $dates = ['deleted_at'];
    public $timestamps = true;
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title_hero',
            ]
        ];
    }

    public function menu_navbar()
    {
        return $this->belongsTo(MenuNavbar::class, 'slug_menu_navbar');
    }

    public function submenu_navbar()
    {
        return $this->belongsTo(SubMenuNavbar::class, 'slug_submenu_navbar');
    }


    // function menu_navbar()
    // {
    //     return $this->belongsTo(MenuNavbar::class, "hero_relation", "id_menu_navbar", "id_submenu_navbar", "id_hero");
    // }

    // public function menus()
    // {
    //     return $this->belongsTo(MenuNavbar::class, "id_menu_navbar");
    // }
    // public function subMenus()
    // {
    //     return $this->belongsTo(MenuNavbar::class, "id_submenu_navbar");
    // }

    public function gambar()
    {
        if ($this->gambar && file_exists(public_path('image/hero' . $this->gambar))) {
            return asset('image/hero/' . $this->gambar);
        } else {
            return asset('image/no_image.png');
        }
    }

    public function deleteGambar()
    {
        if ($this->gambar && file_exists(public_path('image/hero/' . $this->gambar))) {
            return unlink(public_path('image/hero/' . $this->gambar));
        }
    }

}
