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

    // protected $fillable = ['title_hero', 'mini_title', 'deskripsi', 'link_button', 'image_background', 'image_right', 'id_menu_navbar', 'id_submenu_navbar'];
    protected $table = "tb_hero";
    protected $guarded = [];
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
        return $this->belongsTo(MenuNavbar::class, 'id_menu_navbar', 'nama_menu');
    }

    public function submenu_navbar()
    {
        return $this->belongsTo(SubMenuNavbar::class, 'id_submenu_navbar');
    }
    public static function getHeroBySlug($slug)
    {
        return self::where('slug', $slug)->orWhere('slug_navbar', $slug)->first();
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
        if ($this->image_background && file_exists(public_path('image/hero' . $this->image_background))) {
            return asset('image/hero/' . $this->image_background);
        } else {
            return asset('image/no_image.png');
        }
    }

    public function deleteGambar()
    {
        if ($this->image_background && file_exists(public_path('image/hero/' . $this->image_background))) {
            return unlink(public_path('image/hero/' . $this->image_background));
        }
    }

}
