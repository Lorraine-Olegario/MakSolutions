<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Banner;


class HomeController extends Controller
{
    public function show()
    {
        $banners = Banner::all()->sortByDesc('created_at')->skip(0)->take(5);
        $news = News::all()->sortByDesc('created_at')->skip(0)->take(2);
        $otherNews = News::get()->sortByDesc('created_at')->skip(0)->take(3);

        return view('welcome', [
            'banners' => $banners,
            'news' => $news,
            'otherNews' => $otherNews
        ]);
    }
}

