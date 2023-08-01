<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Promo extends Model
{
    use HasFactory;
    use Sluggable;
    use SoftDeletes;

    protected $table = "tb_promo";
    protected $guarded = [];
    protected $dates = ['deleted_at'];
    public $timestamps = true;
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title_card',
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

    public function gambar()
    {
        if ($this->image && file_exists(public_path('image/' . $this->image))) {
            return asset('image/' . $this->image);
        } else {
            return asset('image/no_image.png');
        }
    }

    public function deleteGambar()
    {
        if ($this->image && file_exists(public_path('image/' . $this->image))) {
            return unlink(public_path('image/' . $this->image));
        }
    }
}
