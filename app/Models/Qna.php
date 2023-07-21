<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\DB;

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

    public function heroes()
    {
        return DB::table('tb_hero')
            ->join('tb_qna', 'tb_hero.halaman', '=', 'tb_qna.kategori')
            ->select('tb_hero.*')
            ->get();
    }
}