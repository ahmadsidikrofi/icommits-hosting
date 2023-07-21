<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hero extends Model
{
    use HasFactory;
    use Sluggable;
    use SoftDeletes;

    protected $table = "tb_hero";
    protected $dates = ['deleted_at'];
    public $timestamps = true;
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'kategori'
            ]
        ];
    }

    public function kategoriHero()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori_hero');
    }

    public function gambar()
    {
        if ($this->gambar && file_exists(public_path('images/artikel/' . $this->gambar))) {
            return asset('image/hero/' . $this->gambar);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function deleteGambar()
    {
        if ($this->gambar && file_exists(public_path('image/hero/' . $this->gambar))) {
            return unlink(public_path('image/hero/' . $this->gambar));
        }
    }

}
