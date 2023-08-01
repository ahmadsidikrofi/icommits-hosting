<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServicesSection extends Model
{
    use HasFactory;
    use Sluggable;
    use SoftDeletes;

    protected $table = "tb_services_section";
    protected $guarded = [];
    protected $dates = ['deleted_at'];
    public $timestamps = true;

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
                'source' => 'services_title	',
            ]
        ];
    }

}
