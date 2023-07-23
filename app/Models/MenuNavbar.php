<?php

namespace App\Models;

use App\Models\SubMenuNavbar;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MenuNavbar extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = "tb_menu_navbar";
    protected $guarded = [];

    public function subMenus()
    {
        return $this->hasMany(SubMenuNavbar::class, 'id_menu_navbar');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama_menu',
            ]
        ];
    }
}
