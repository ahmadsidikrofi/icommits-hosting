<?php

namespace App\Models;

use App\Models\MenuNavbar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubMenuNavbar extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
    protected $table = "tb_menu_submenu";
    public $timestamps = true;

    public function menu()
    {
        return $this->belongsTo(MenuNavbar::class, 'id_submenu_navbar');
    }
    public function hero()
    {
        return $this->belongsTo(Hero::class, 'id_submenu_navbar');
    }

    public function services_section()
    {
        return $this->belongsTo(ServicesSection::class, 'id_submenu_navbar');
    }
    public function promo()
    {
        return $this->belongsTo(Hero::class, 'id_submenu_navbar');
    }
}
