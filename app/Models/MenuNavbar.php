<?php

namespace App\Models;

use App\Models\LinkMenu;
use App\Models\SubMenuNavbar;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MenuNavbar extends Model
{
    use SoftDeletes;

    protected $table = "tb_menu_navbar";
    protected $guarded = [];
    protected $dates = ['deleted_at'];

    public function tautan()
    {
        return $this->belongsToMany(LinkMenu::class, "kategori_stories", "stories_id", "kategori_id");
    }

    // Hubungkan model MenuNavbar dengan model SubMenuNavbar melalui relationship
    public function subMenus()
    {
        return $this->hasMany(SubMenuNavbar::class, 'id_menu_navbar');
    }

    public function hero()
    {
        return $this->belongsTo(Hero::class, 'id_menu_navbar');
    }

    public function services_section()
    {
        return $this->belongsTo(ServicesSection::class, 'id_menu_navbar');
    }

    public function promo()
    {
        return $this->belongsTo(Hero::class, 'id_menu_navbar');
    }

    public function tanya()
    {
        return $this->belongsTo(Hero::class, 'id_menu_navbar');
    }

    public function domain()
    {
        return $this->belongsTo(Hero::class, 'id_menu_navbar');
    }
}
