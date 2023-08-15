<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class ModulePaketVPS extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'tb_module_paket_vps';
    protected $guarded = [];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama_paket'
            ]
        ];
    }
}
