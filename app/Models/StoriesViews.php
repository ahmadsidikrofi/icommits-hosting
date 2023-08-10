<?php

namespace App\Models;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StoriesViews extends Model
{
    use HasFactory;
    protected $table = 'stories_views';
    public static function createViewLog($stories) {
        $storiesViews= new StoriesViews();
        $storiesViews->stories_id = $stories->id;
        $storiesViews->slug = $stories->slug;
        $storiesViews->url = request()->url();
        $storiesViews->session_id = request()->getSession()->getId();
        $storiesViews->user_id = (auth()->check()) ? auth()->id():null;
        $storiesViews->ip = request()->ip();
        $storiesViews->agent = request()->header('User-Agent');
        $storiesViews->save();
    }
}
