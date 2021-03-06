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
            'path' => 'blog/{seo_link}',
            'sort' => 'title',
            'extends' => '_layouts.blog',
            'items' => [
                [
                    'title' => 'CSS3',
                    'h1_title' => 'CSS3 Posts',
                    'seo_link' => 'css',
                    'seo_title' => 'CSS Posts',
                    'seo_description' => 'CSS examples and new CSS3 code and Web Development code to help you develop better semantic websites',
                    'content' => 'When I first started developing websites CSS wasn\'t widely used. This has changed so much since version 2. With CSS3 and the use of CSS preprocessors such as Sass and Less it would be a strange world without it.',
                ],
                [
                    'title' => 'PHP',
                    'h1_title' => 'PHP Posts',
                    'seo_link' => 'php',
                    'seo_title' => 'PHP Posts',
                    'seo_description' => 'Blog posts about PHP code including PHP Functions, Classes, Scripts and general PHP Developer information.',
                    'content' => 'PHP is my primary development language and has been so for the last 11+ years. Being a PHP developer has meant I can work on a massive variety of projects and in my time I\'ve seen lots of different frameworks come and go. The power of PHP is the ingenuity and dedication of it developers, this is what I love and hope to give some help with my knowledge in this blog.',
                ],
                [
                    'title' => 'MySQL',
                    'h1_title' => 'MySQL Posts',
                    'seo_link' => 'mysql',
                    'seo_title' => 'MySQL Posts',
                    'seo_description' => 'How to write your database queries in MySQL and the best performance for your PHP Website.',
                    'content' => '',
                ],
                [
                    'title' => 'jQuery',
                    'h1_title' => 'jQuery Posts',
                    'seo_link' => 'jquery',
                    'seo_title' => 'jQuery Posts',
                    'seo_description' => 'jQuery Development advice, plugin and javascript usage for your Web Development projects',
                    'content' => 'I really started using jQuery to it\'s full potential in 2011 and have been impressed with it\'s maturity since then. I\'ve developed several jQuery plugins some of which are available from my <a href="/code/">scripts section</a>. I love the interactivity you can add to a website with a relatively small amount of code.',
                ],
                [
                    'title' => 'Magento',
                    'h1_title' => 'Magento Posts',
                    'seo_link' => 'magento',
                    'seo_title' => 'Magento Posts',
                    'seo_description' => 'Quick guides to help you with your Magento development. Includes information on Layouts, Blocks and other Magento project fundamentals.',
                    'content' => 'Magento has over 240,000 e-commerce shops built in it making it the worlds largest e-commerce platform. In 2014 Google has revealed that the term &quot;Magento&quot; was searched more than the word &quot;ecommerce&quot;',
                ],
                [
                    'title' => 'Magento 2',
                    'h1_title' => 'Magento 2 Blog Posts',
                    'seo_link' => 'magento-2',
                    'seo_title' => 'Magento 2 Blog Posts',
                    'seo_description' => 'Quick guides to help you with your Magento 2 development. Includes information on Layouts, Blocks and other Magento 2 project fundamentals.',
                    'content' => 'Magento 2 was released on Nov 17, 2015 with lots of hype and expectation. It has been a rocky start with limited plugin availability (initially). In 2016 I built 3 Magento 2 sites and have been impressed with the modularity and performance over it\'s predecessor.

Here are a few blog posts with my personal trials and triumphs using Magento 2.',
                ],
                [
                    'title' => 'Apple Posts',
                    'h1_title' => 'Apple Posts Blog Posts',
                    'seo_link' => 'apple-mac',
                    'seo_title' => 'Apple Posts Blog Posts',
                    'seo_description' => 'Tips on how to maximise the use of your Mac software and hardware. Also some tips on Web Development using your Mac.',
                    'content' => '',
                ],
                [
                    'title' => 'Photography',
                    'h1_title' => 'Photography',
                    'seo_link' => 'photography',
                    'seo_title' => 'Photography Posts',
                    'seo_description' => 'Read some of my observations of photography and some of my albums.',
                    'content' => '',
                ],
                [
                    'title' => 'Linux',
                    'h1_title' => 'Linux',
                    'seo_link' => 'linux',
                    'seo_title' => 'Linux Posts',
                    'seo_description' => 'Some of my experiences using different Linux distro&#39;s for Web Development and PHP, MySQL Website Development.',
                    'content' => '',
                ],
                [
                    'title' => 'HTML5',
                    'h1_title' => 'HTML5',
                    'seo_link' => 'html5',
                    'seo_title' => 'HTML5 Posts',
                    'seo_description' => 'HTML5 Code and Development tips and advice',
                    'content' => 'I\'ve been a HTML developer since I was 16 and it has certainly become a more broader language in that time. HTML5 has added so much to the developer toolkit that we really are able to create some amazingly interactive and deep web applications.',
                ],
                [
                    'title' => 'General',
                    'h1_title' => 'General',
                    'seo_link' => 'general',
                    'seo_title' => 'General News and Articles',
                    'seo_description' => 'My blog articles that don\'t fit in to any specific category. News from around the world and generic articles I\'ve read.',
                    'content' => '',
                ],
                [
                    'title' => 'Xbox',
                    'h1_title' => 'Xbox',
                    'seo_link' => 'xbox',
                    'seo_title' => 'Xbox Posts',
                    'seo_description' => 'Xbox 360 posts about games and hardware for the Microsoft Console.',
                    'content' => '',
                ],
                [
                    'title' => 'PS3',
                    'h1_title' => 'PS3',
                    'seo_link' => 'ps3',
                    'seo_title' => 'PS3 Posts',
                    'seo_description' => 'The Sony PS3 has been my favourite console for many years, read some of my game reviews and news articles I\'ve seen on the web.',
                    'content' => '',
                ],
                [
                    'title' => 'Android',
                    'h1_title' => 'Android',
                    'seo_link' => 'android',
                    'seo_title' => 'Android Posts',
                    'seo_description' => 'Blog posts discussing the Android operating system and apps associated with it.',
                    'content' => '',
                ],
                [
                    'title' => 'PC',
                    'h1_title' => 'PC',
                    'seo_link' => 'pc',
                    'seo_title' => 'PC Posts',
                    'seo_description' => 'Windows software, hardware and general Microsoft Windows tips and tricks for using your computer to the maximum.',
                    'content' => '',
                ],
                [
                    'title' => 'Bitcoin',
                    'h1_title' => 'Bitcoin',
                    'seo_link' => 'bitcoin',
                    'seo_title' => 'Bitcoin - Cryptocurrency not just for geeks',
                    'seo_description' => 'Bitcoin is an experimental new digital currency that enables instant payments to anyone, anywhere in the world.',
                    'content' => 'Bitcoin is an experimental new digital currency that enables instant payments to anyone, anywhere in the world. Bitcoin uses peer-to-peer technology to operate with no central authority: managing transactions and issuing money are carried out collectively by the network. Bitcoin is also the name of the open source software which enables the use of this currency.',
                ],
                [
                    'title' => 'Wii',
                    'h1_title' => 'Wii',
                    'seo_link' => 'wii',
                    'seo_title' => 'Wii Posts',
                    'seo_description' => 'Some of my old posts on the Wii system and games.',
                    'content' => '',
                ],
                [
                    'title' => 'PSP',
                    'h1_title' => 'PSP',
                    'seo_link' => 'psp',
                    'seo_title' => 'PSP Posts',
                    'seo_description' => 'My Sony PSP articles about games, themes and applications.',
                    'content' => '',
                ]
            ]
        ]
    ],
    'selected' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'selected' : '';
    },
];
