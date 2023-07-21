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

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'pertanyaan'
            ]
        ];
    }
}