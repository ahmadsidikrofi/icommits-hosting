<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class LinkMenu extends Model
{
    use HasFactory;
    use Sluggable;
    protected $table = "links";
    protected $guarded = [];
    function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama_menu',
            ]
        ];
    }
}
