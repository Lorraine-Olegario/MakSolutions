<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function show()
    {
        $banners = DB::table('banners')->orderBy('created_at', 'desc')->take(5)->get();
        $news = DB::table('news')->orderBy('created_at', 'desc')->take(3)->get();
        $company = DB::table('company')->first();
        $otherNews = DB::table('news')->orderBy('created_at', 'desc')->take(3)->get();

        return view('welcome', [
            'banners' => $banners,
            'news' => $news,
            'otherNews' => $otherNews,
            'company' => $company,
        ]);
    }
}
