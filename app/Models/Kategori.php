<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{

    use HasFactory;
    use SoftDeletes;

    protected $table = "tb_kategori";
    protected $fillable = ['nama', 'slug'];
    protected $dates = ['deleted_at'];
    public $timestamps = true;

    public function hero()
    {
        return $this->hasMany(Hero::class, 'id_kategori_hero');
    }
}

