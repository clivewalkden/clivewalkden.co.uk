<?php

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

return [
    'production' => false,
    'baseUrl' => 'https://clivewalkden.co.uk/',
    'meta_title' => 'DevOps Engineer and Magento 2 Developer in Gloucestershire',
    'meta_description' => 'I\'m the CTO for SOZO Design in Cheltenham, UK. I also build Magento 2 sites and other PHP projects. I\'m also interested in Crypto and Security.',
    'copyright' => 'Copyright ©2013-'.Carbon::now()->year.' Clive Walkden',
    'start' => Carbon::parse('2001-01-01'),
    'social' => [
        'email' => [
            'title' => 'Email',
            'icon' => 'bx-envelope',
            'href' => 'mailto:contact@clivewalkden.co.uk',
            'effect' => 'bx-tada-hover',
        ],
        'twitter' => [
            'title' => 'Twitter',
            'icon' => 'bxl-twitter',
            'href' => 'https://twitter.com/clivewalkden',
        ],
        'github' => [
            'title' => 'Github',
            'icon' => 'bxl-github',
            'href' => 'https://github.com/clivewalkden'
        ]
    ],
    'collections' => [
        'experience' => [
            'sort' => ['-in_use', '-length'],
            'items' => [
                [
                    'title' => 'Go',
                    'start' => Carbon::parse('2022-02-01'),
                    'end' => Carbon::now(),
                    'length' => Carbon::parse('2022-02-01')->diffInYears(Carbon::now()),
                    'in_use' => true,
                ],
                [
                    'title' => 'PHP',
                    'start' => Carbon::parse('2002-01-01'),
                    'end' => Carbon::now(),
                    'length' => Carbon::parse('2002-01-01')->diffInYears(Carbon::now()),
                    'in_use' => true,
                ],
                [
                    'title' => 'HTML',
                    'start' => Carbon::parse('2001-01-01'),
                    'end' => Carbon::now(),
                    'length' => Carbon::parse('2001-01-01')->diffInYears(Carbon::now()),
                    'in_use' => true,
                ],
                [
                    'title' => 'CSS',
                    'start' => Carbon::parse('2003-01-01'),
                    'end' => Carbon::now(),
                    'length' => Carbon::parse('2003-01-01')->diffInYears(Carbon::now()),
                    'in_use' => true,
                ],
                [
                    'title' => 'Python',
                    'start' => Carbon::parse('2015-01-01'),
                    'end' => Carbon::now(),
                    'length' => Carbon::parse('2015-01-01')->diffInYears(Carbon::now()),
                    'in_use' => true,
                ],
                [
                    'title' => 'Linux',
                    'start' => Carbon::parse('2011-05-01'),
                    'end' => Carbon::now(),
                    'length' => Carbon::parse('2011-05-01')->diffInYears(Carbon::now()),
                    'in_use' => true,
                ],
                [
                    'title' => 'Windows',
                    'start' => Carbon::parse('2001-01-01'),
                    'end' => Carbon::now(),
                    'length' => Carbon::parse('2001-01-01')->diffInYears(Carbon::now()),
                    'in_use' => true,
                ],
                [
                    'title' => 'Mac OSX',
                    'start' => Carbon::parse('2005-01-01'),
                    'end' => Carbon::parse('2019-12-01'),
                    'length' => Carbon::parse('2005-01-01')->diffInYears(Carbon::now()),
                    'in_use' => true,
                ],
                [
                    'title' => 'Shell Scripting',
                    'start' => Carbon::parse('2014-01-01'),
                    'end' => Carbon::now(),
                    'length' => Carbon::parse('2014-01-01')->diffInYears(Carbon::now()),
                    'in_use' => true,
                ],
                [
                    'title' => 'Ansible',
                    'start' => Carbon::parse('2018-06-18'),
                    'end' => Carbon::now(),
                    'length' => Carbon::parse('2018-06-18')->diffInYears(Carbon::now()),
                    'in_use' => true,
                ],
                [
                    'title' => 'Terraform',
                    'start' => Carbon::parse('2019-05-22'),
                    'end' => Carbon::now(),
                    'length' => Carbon::parse('2019-05-22')->diffInYears(Carbon::now()),
                    'in_use' => true,
                ],
                [
                    'title' => 'CentOS',
                    'start' => Carbon::parse('2011-05-01'),
                    'end' => Carbon::now(),
                    'length' => Carbon::parse('2011-05-01')->diffInYears(Carbon::now()),
                    'in_use' => true,
                ],
                [
                    'title' => 'AWS',
                    'start' => Carbon::parse('2017-01-01'),
                    'end' => Carbon::now(),
                    'length' => Carbon::parse('2017-01-01')->diffInYears(Carbon::now()),
                    'in_use' => true,
                ],
                [
                    'title' => 'Google Cloud',
                    'start' => Carbon::parse('2018-12-01'),
                    'end' => Carbon::now(),
                    'length' => Carbon::parse('2018-12-01')->diffInYears(Carbon::now()),
                    'in_use' => true,
                ],
                [
                    'title' => 'MySQL',
                    'start' => Carbon::parse('2005-01-01'),
                    'end' => Carbon::now(),
                    'length' => Carbon::parse('2005-01-01')->diffInYears(Carbon::now()),
                    'in_use' => true,
                ],
                [
                    'title' => 'jQuery',
                    'start' => Carbon::parse('2007-01-01'),
                    'end' => Carbon::now(),
                    'length' => Carbon::parse('2007-01-01')->diffInYears(Carbon::now()),
                    'in_use' => false,
                ],
                [
                    'title' => 'React',
                    'start' => Carbon::parse('2019-11-20'),
                    'end' => Carbon::now(),
                    'length' => Carbon::parse('2019-11-20')->diffInYears(Carbon::now()),
                    'in_use' => true,
                ],
                [
                    'title' => 'Javascript',
                    'start' => Carbon::parse('2005-01-01'),
                    'end' => Carbon::now(),
                    'length' => Carbon::parse('2005-01-01')->diffInYears(Carbon::now()),
                    'in_use' => true,
                ],
                [
                    'title' => 'Magento',
                    'start' => Carbon::parse('2014-07-15'),
                    'end' => Carbon::now(),
                    'length' => Carbon::parse('2014-07-15')->diffInYears(Carbon::now()),
                    'in_use' => true,
                ],
                [
                    'title' => 'Magento 2',
                    'start' => Carbon::parse('2016-01-19'),
                    'end' => Carbon::now(),
                    'length' => Carbon::parse('2016-01-19')->diffInYears(Carbon::now()),
                    'in_use' => true,
                ],
                [
                    'title' => 'Apache',
                    'start' => Carbon::parse('2011-05-01'),
                    'end' => Carbon::now(),
                    'length' => Carbon::parse('2011-05-01')->diffInYears(Carbon::now()),
                    'in_use' => true,
                ],
                [
                    'title' => 'NGINX',
                    'start' => Carbon::parse('2015-12-24'),
                    'end' => Carbon::now(),
                    'length' => Carbon::parse('2015-12-24')->diffInYears(Carbon::now()),
                    'in_use' => true,
                ],
                [
                    'title' => 'Laravel',
                    'start' => Carbon::parse('2013-11-15'),
                    'end' => Carbon::now(),
                    'length' => Carbon::parse('2013-11-15')->diffInYears(Carbon::now()),
                    'in_use' => true,
                ],
                [
                    'title' => 'AlpineJS',
                    'start' => Carbon::parse('2020-05-22'),
                    'end' => Carbon::now(),
                    'length' => Carbon::parse('2020-05-22')->diffInYears(Carbon::now()),
                    'in_use' => true,
                ],
                [
                    'title' => 'Ubuntu',
                    'start' => Carbon::parse('2019-12-06'),
                    'end' => Carbon::now(),
                    'length' => Carbon::parse('2019-12-06')->diffInYears(Carbon::now()),
                    'in_use' => true,
                ],
                [
                    'title' => 'Packer',
                    'start' => Carbon::parse('2019-01-22'),
                    'end' => Carbon::now(),
                    'length' => Carbon::parse('2019-01-22')->diffInYears(Carbon::now()),
                    'in_use' => true,
                ],
                [
                    'title' => 'Docker',
                    'start' => Carbon::parse('2019-01-10'),
                    'end' => Carbon::now(),
                    'length' => Carbon::parse('2019-01-10')->diffInYears(Carbon::now()),
                    'in_use' => true,
                ],
                [
                    'title' => 'Kubernetes',
                    'start' => Carbon::parse('2020-01-01'),
                    'end' => Carbon::now(),
                    'length' => Carbon::parse('2020-01-01')->diffInYears(Carbon::now()),
                    'in_use' => true,
                ],
                [
                    'title' => 'Git',
                    'start' => Carbon::parse('2011-02-19'),
                    'end' => Carbon::now(),
                    'length' => Carbon::parse('2011-02-19')->diffInYears(Carbon::now()),
                    'in_use' => true,
                ],
                [
                    'title' => 'Composer',
                    'start' => Carbon::parse('2013-05-06'),
                    'end' => Carbon::now(),
                    'length' => Carbon::parse('2013-05-06')->diffInYears(Carbon::now()),
                    'in_use' => true,
                ]
            ]
        ],
        'portfolio' => [
            'sort' => ['-launched','-lastupdate'],
        ],
        'posts' => [
            'path' => 'blog/{category}/{filename}',
            'sort' => ['-updated_at', '-published'],
            'filter' => function ($item) {
                return !$item->hide;
            }
        ],
        'recipes' => [
            'sort' => 'id',
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
                    'meta_title' => 'CSS examples, code and tweaks',
                    'meta_description' => 'CSS examples and new CSS3 code and Web Development code to help you develop better semantic websites',
                    'content' => 'When I first started developing websites CSS wasn\'t widely used. This has changed so much since version 2. With CSS3 and the use of CSS preprocessors such as Sass and Less it would be a strange world without it.',
                ],
                [
                    'title' => 'PHP',
                    'h1_title' => 'PHP Posts',
                    'seo_link' => 'php',
                    'meta_title' => 'PHP developer code guides and findings',
                    'meta_description' => 'Blog posts about PHP code including PHP Functions, Classes, Scripts and general PHP Developer information.',
                    'content' => 'PHP is my primary development language and has been so for the last 11+ years. Being a PHP developer has meant I can work on a massive variety of projects and in my time I\'ve seen lots of different frameworks come and go. The power of PHP is the ingenuity and dedication of it developers, this is what I love and hope to give some help with my knowledge in this blog.',
                ],
                [
                    'title' => 'MySQL',
                    'h1_title' => 'MySQL Posts',
                    'seo_link' => 'mysql',
                    'meta_title' => 'MySQL usage, tweaks and learnings',
                    'meta_description' => 'How to write your database queries in MySQL and the best performance for your PHP Website.',
                    'content' => 'How to write your database queries in MySQL and the best performance for your PHP Website.',
                ],
                [
                    'title' => 'jQuery',
                    'h1_title' => 'jQuery Posts',
                    'seo_link' => 'jquery',
                    'meta_title' => 'jQuery guides, findings and plugins',
                    'meta_description' => 'jQuery Development advice, plugin and javascript usage for your Web Development projects',
                    'content' => 'I really started using jQuery to it\'s full potential in 2011 and have been impressed with it\'s maturity since then. I\'ve developed several jQuery plugins some of which are available from my <a href="/code/">scripts section</a>. I love the interactivity you can add to a website with a relatively small amount of code.',
                ],
                [
                    'title' => 'Magento',
                    'h1_title' => 'Magento Posts',
                    'seo_link' => 'magento',
                    'meta_title' => 'Magento guides, findings and modules',
                    'meta_description' => 'Quick guides to help you with your Magento development. Includes information on Layouts, Blocks and other Magento project fundamentals.',
                    'content' => 'Magento has over 240,000 e-commerce shops built in it making it the worlds largest e-commerce platform. In 2014 Google has revealed that the term &quot;Magento&quot; was searched more than the word &quot;ecommerce&quot;',
                ],
                [
                    'title' => 'Magento 2',
                    'h1_title' => 'Magento 2 guides, finding and modules',
                    'seo_link' => 'magento-2',
                    'meta_title' => 'Magento 2 Blog Posts',
                    'meta_description' => 'Quick guides to help you with your Magento 2 development. Includes information on Layouts, Blocks and other Magento 2 project fundamentals.',
                    'content' => 'Magento 2 was released on Nov 17, 2015 with lots of hype and expectation. It has been a rocky start with limited plugin availability (initially). In 2016 I built 3 Magento 2 sites and have been impressed with the modularity and performance over it\'s predecessor.

Here are a few blog posts with my personal trials and triumphs using Magento 2.',
                ],
                [
                    'title' => 'Apple Posts',
                    'h1_title' => 'Apple Blog Posts, includes tips and tricks',
                    'seo_link' => 'apple-mac',
                    'meta_title' => 'Apple Posts Blog Posts',
                    'meta_description' => 'Tips on how to maximise the use of your Mac software and hardware. Also some tips on Web Development using your Mac.',
                    'content' => 'Tips on how to maximise the use of your Mac software and hardware. Also some tips on Web Development using your Mac.',
                ],
                [
                    'title' => 'Photography',
                    'h1_title' => 'Photography',
                    'seo_link' => 'photography',
                    'meta_title' => 'Photography Posts from my perspective',
                    'meta_description' => 'Read some of my observations of photography and some of my albums.',
                    'content' => 'Read some of my observations of photography and some of my albums.',
                ],
                [
                    'title' => 'Linux',
                    'h1_title' => 'Linux',
                    'seo_link' => 'linux',
                    'meta_title' => 'Linux command line tools, installations etc',
                    'meta_description' => 'Some of my experiences using different Linux distro&#39;s for Web Development and PHP, MySQL Website Development.',
                    'content' => 'Some of my experiences using different Linux distro&#39;s for Web Development and PHP, MySQL Website Development.',
                ],
                [
                    'title' => 'HTML5',
                    'h1_title' => 'HTML5',
                    'seo_link' => 'html5',
                    'meta_title' => 'HTML5 Code and Development tips and advice',
                    'meta_description' => 'HTML5 Code and Development tips and advice with less tables',
                    'content' => 'I\'ve been a HTML developer since I was 16 and it has certainly become a more broader language in that time. HTML5 has added so much to the developer toolkit that we really are able to create some amazingly interactive and deep web applications.',
                ],
                [
                    'title' => 'General',
                    'h1_title' => 'General',
                    'seo_link' => 'general',
                    'meta_title' => 'General News and Articles from my life',
                    'meta_description' => 'My blog articles that don\'t fit in to any specific category. News from around the world and generic articles I\'ve read.',
                    'content' => 'My blog articles that don\'t fit in to any specific category. News from around the world and generic articles I\'ve read.',
                ],
                [
                    'title' => 'Microsoft Xbox',
                    'h1_title' => 'Microsoft Xbox',
                    'seo_link' => 'xbox',
                    'meta_title' => 'Microsoft Xbox 360 and up information, games and more?',
                    'meta_description' => 'Microsoft Xbox posts about games and hardware for the Microsoft Console.',
                    'content' => 'Microsoft Xbox 360 / One and Series posts about games and hardware for the Microsoft Console.',
                ],
                [
                    'title' => 'Sony PS3',
                    'h1_title' => 'Sony PS3',
                    'seo_link' => 'ps3',
                    'meta_title' => 'Sony PS3 game reviews and news',
                    'meta_description' => 'The Sony PS3 has been my favourite console for many years, read some of my game reviews and news articles I\'ve seen on the web.',
                    'content' => 'The Sony PS3 has been my favourite console for many years, read some of my game reviews and news articles I\'ve seen on the web.',
                ],
                [
                    'title' => 'Google Android',
                    'h1_title' => 'Google Android',
                    'seo_link' => 'android',
                    'meta_title' => 'Google Android news and apps',
                    'meta_description' => 'Blog posts discussing the Android operating system and apps associated with it.',
                    'content' => 'Blog posts discussing the Android operating system and apps associated with it.',
                ],
                [
                    'title' => 'PC',
                    'h1_title' => 'PC',
                    'seo_link' => 'pc',
                    'meta_title' => 'Microsoft Windows software and hardware articles',
                    'meta_description' => 'Windows software, hardware and general Microsoft Windows tips and tricks for using your computer to the maximum.',
                    'content' => 'Windows software, hardware and general Microsoft Windows tips and tricks for using your computer to the maximum.',
                ],
                [
                    'title' => 'Bitcoin',
                    'h1_title' => 'Bitcoin',
                    'seo_link' => 'bitcoin',
                    'meta_title' => 'Bitcoin - Cryptocurrency not just for geeks',
                    'meta_description' => 'Bitcoin is an experimental new digital currency that enables instant payments to anyone, anywhere in the world.',
                    'content' => 'Bitcoin is an experimental new digital currency that enables instant payments to anyone, anywhere in the world. Bitcoin uses peer-to-peer technology to operate with no central authority: managing transactions and issuing money are carried out collectively by the network. Bitcoin is also the name of the open source software which enables the use of this currency.',
                ],
                [
                    'title' => 'Nintendo Wii',
                    'h1_title' => 'Nintendo Wii',
                    'seo_link' => 'wii',
                    'meta_title' => 'Nintendo Wii system information and games',
                    'meta_description' => 'Some of my old posts on the Wii system and games.',
                    'content' => 'Some of my old posts on the Wii system and games.',
                ],
                [
                    'title' => 'Sony PSP',
                    'h1_title' => 'Sony PSP',
                    'seo_link' => 'psp',
                    'meta_title' => 'Sony PSP games, themes and applications',
                    'meta_description' => 'My Sony PSP articles about games, themes and applications.',
                    'content' => 'My Sony PSP articles about games, themes and applications.',
                ]
            ]
        ]
    ],
    'selected' => function ($page, $section) {
        return $page->getPath() == $section || Str::contains($page->getPath(), $section) ? 'inline-block py-2 px-4 text-white no-underline' : 'inline-block text-gray-400 no-underline hover:text-gray-200 hover:text-underline py-2 px-4';
    },
    'sitemap_exclude' => [
        '.htaccess',
        'favicon.ico',
        'apple-touch-icon.png',
        'apple-touch-icon-precomposed.png',
        'apple-touch-icon-72x72-precomposed.png',
        'apple-touch-icon-114x114-precomposed.png',
        'apple-touch-icon-57x57-precomposed.png',

    ],
    'sirv' => [
        'cdn_url' => 'https://clivewalkden.sirv.com',
        'profile' => 'personal'
    ],
    'image' => function ($page, $src, $width = null, $height = null, $settings = []) {
        $tags = '';
        $url_arguments = [];

        if ($page->sirv):
            $url_arguments['profile'] = $page->sirv['profile'];
            if (Arr::has($settings, 'resize')):
                Arr::forget($settings, 'resize');
                if ($width):
                    $url_arguments['w'] = $width;
                endif;
                if ($height):
                    $url_arguments['h'] = $height;
                endif;
            endif;
        endif;

        // Check if data-options is set in setting
        // remove src setting and replace with data-src
        // $settings = Arr::add($settings,'data-options','fit:cover');
        if (Arr::has($settings, 'data-options')):
            Arr::add($settings, 'data-src', $src);
            Arr::forget($settings, 'src');
        endif;

        if ($src) {
            if ($page->sirv):
                $sorted_url_arguments = Arr::sort($url_arguments);
                $src = $page->sirv['cdn_url'] . $src . '?' . http_build_query($sorted_url_arguments);
            endif;
            $settings = Arr::add($settings,'src', $src);
        }

        if ($width) {
            $settings = Arr::add($settings, 'width', $width);
        }

        if ($height) {
            $settings = Arr::add($settings, 'height', $height);
        }

        if ($settings):
            $sorted = Arr::sort($settings);
            $tags = implode(' ', array_map(
                function ($k, $v) {
                    return $k . '="' . htmlspecialchars($v) . '"';
                },
                array_keys($sorted), $sorted
            ));
        endif;

        return "<img {$tags}/>";
    },
];
