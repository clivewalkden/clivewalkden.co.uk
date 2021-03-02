<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => 'https://clivewalkden.co.uk',
    'meta_title' => 'PHP, MySQL, HTML5, CSS3 and jQuery developer in Gloucestershire | Clive Walkden',
    'meta_description' => 'I\'m a PHP developer from the UK currently working for SOZO Design. My skills lie in website development using PHP, MySQL, HTML5, CSS3 and jQuery.',
    'collections' => [
        'portfolio' => [
            'sort' => '-id',
        ],
        'posts' => [
            'path' => 'blog/{category}/{filename}',
            'sort' => '-published'
        ],
        'categories' => [
            'path' => 'blog/{filename}',
            'sort' => 'title'
        ]
    ],
    'selected' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'selected' : '';
    },
];
