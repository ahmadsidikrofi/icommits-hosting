<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class KategoriStories extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = "kategori";
    protected $guarded = [];

    function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama_kategori',
            ]
        ];
    }

}
