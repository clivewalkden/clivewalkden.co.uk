<?php

namespace App\Listeners;

use samdark\sitemap\Sitemap;
use TightenCo\Jigsaw\Jigsaw;
use Illuminate\Support\Str;

class GenerateSitemap
{
    public function handle(Jigsaw $jigsaw)
    {
        $baseUrl = $jigsaw->getConfig('baseUrl');
        $sitemap = new Sitemap($jigsaw->getDestinationPath() . '/sitemap.xml');

        collect($jigsaw->getOutputPaths())->each(
            function ($path) use ($baseUrl, $sitemap) {
                if (!$this->isAsset($path)) {
                    $sitemap->addItem($baseUrl . $path, time(), Sitemap::DAILY);
                }
            }
        );

        $sitemap->write();
    }

    public function isAsset($path)
    {
        return Str::startsWith($path, '/assets');
    }
}