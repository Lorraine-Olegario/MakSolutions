<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class CreateSiteMap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command create site map';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sitemap = Sitemap::create();

        foreach (Route::getRoutes() as $route) {
            $uri = $route->uri();
            $methods = $route->methods();
            if (in_array('GET', $methods, true) && !preg_match('/^(api|admin|sanctum|_ignition)/', $uri)) {
                $url = url($uri);
                $priority = ($uri === '/') ? 1.0 : 0.8;

                $sitemap->add(Url::create($url)
                    ->setLastModificationDate(now())
                    ->setChangeFrequency('daily')
                    ->setPriority($priority));
            }
        }

        // Adiciona URLs dinâmicas de notícias
        $newsItems = \App\Models\News::all();
        foreach ($newsItems as $newsItem) {
            $sitemap->add(Url::create('/noticias/' . $newsItem->slug)
                ->setLastModificationDate($newsItem->updated_at)
                ->setChangeFrequency('daily')
                ->setPriority(0.7));
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap gerado com sucesso!');
    }
}
