<?php

namespace App\Listeners;

use TightenCo\Jigsaw\Jigsaw;

class GenerateIndex
{
    public function handle(Jigsaw $jigsaw)
    {
        $data = collect($jigsaw->getCollection('posts')->map(function ($page) use ($jigsaw) {
            return [
                'title' => $page->title,
                'intro' => $page->short_intro,
                'content' => $page->getContent(),
                'link' => rightTrimPath($jigsaw->getConfig('baseUrl')).$page->getPath(),
            ];
        })->values());

        file_put_contents($jigsaw->getDestinationPath().'/index.json', json_encode($data));
    }
}
