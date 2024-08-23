<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index($slug)
    {
        $news = DB::table('news')->where('slug', $slug)->first();
        $otherNews = DB::table('news')->orderBy('created_at', 'desc')->take(3)->get();

        return view('/news', [
            'news' => $news,
            'otherNews' => $otherNews
        ]);
    }
}
