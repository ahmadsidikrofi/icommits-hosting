<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Partner extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "tb_partner";
    protected $guarded = [];
    protected $dates = ['deleted_at'];

    public function gambar()
    {
        if ($this->logo && file_exists(public_path('image/partner' . $this->logo))) {
            return asset('image/partner' . $this->logo);
        } else {
            return asset('image/no_image.png');
        }
    }

    public function deleteGambar()
    {
        if ($this->logo && file_exists(public_path('image/partner' . $this->logo))) {
            return unlink(public_path('image/partner' . $this->logo));
        }
    }
}
