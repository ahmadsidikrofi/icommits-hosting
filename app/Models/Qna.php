<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Qna extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = "tb_qna";
    protected $guarded = [];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'pertanyaan'
            ]
        ];
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