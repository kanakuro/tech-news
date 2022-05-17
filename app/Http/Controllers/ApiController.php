<?php

namespace App\Http\Controllers;

use App\Models\FavoriteNews;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7;

class ApiController extends Controller
{
    public function index()
    {
        try {
            $url = config('newsapi.news_api_url') . "top-headlines?country=jp&category=technology&apiKey=" . config('newsapi.news_api_key');
            $method = "GET";
            // 15記事表示
            $count = 15;
            // API接続
            $client = new Client();
            $response = $client->request($method, $url);
            $results = $response->getBody();
            //jsonを連想配列にする
            $articles = json_decode($results, true);

            $news = [];

            for ($id = 0; $id < $count; $id++) {
                array_push($news, [
                    'name' => $articles['articles'][$id]['title'],
                    'url' => $articles['articles'][$id]['url'],
                    'thumbnail' => $articles['articles'][$id]['urlToImage'],
                ]);
            }
        } catch (RequestException $e) {
            echo Psr7\Message::toString($e->getRequest());
            if ($e->hasResponse()) {
                echo Psr7\Message::toString($e->getResponse());
            }
        }
        return view('index', compact('news'));
    }

    public function registFav(Request $request)
    {
        $fav_url = $request->url;
        $fav_id = $request->id;
        $user_id = 99;
        FavoriteNews::registFav($user_id, $fav_id, $fav_url);
        return;
    }
}
