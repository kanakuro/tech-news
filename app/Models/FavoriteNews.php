<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavoriteNews extends Model
{
    use HasFactory;
    protected $table = 'favorite_news';
    protected $guarded = ['id'];

    public static function registFav($user_id, $news_id, $url)
    {
        $fav = new FavoriteNews;
        $fav -> news_id = $news_id;
        $fav -> user_id = 99; //暫定
        $fav -> news_url = $url;
        $fav -> created_at = today();
        $fav -> updated_at = today();

        return $fav ->save();
    }
}
