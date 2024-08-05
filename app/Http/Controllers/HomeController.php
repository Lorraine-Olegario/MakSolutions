<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;


class HomeController extends Controller
{
    public function show()
    {
        $news = News::all()->sortByDesc('created_at')->skip(0)->take(2);
        $otherNews = News::get()->sortByDesc('created_at')->skip(0)->take(3);

        return view('welcome', [
            'news' => $news,
            'otherNews' => $otherNews
        ]);
    }
}
