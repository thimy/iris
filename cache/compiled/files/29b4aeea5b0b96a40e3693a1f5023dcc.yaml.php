<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/Thimy/Documents/iris/grav-skeleton-blog-site/user/config/site.yaml',
    'modified' => 1490865251,
    'data' => [
        'title' => 'Iris Estival-David',
        'default_lang' => 'fr',
        'author' => [
            'name' => 'Iris Estival-David',
            'email' => 'thimy.nya@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'month'
        ],
        'metadata' => [
            'description' => 'Iris Estival-David, Site Officiel'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => [
            '/changelog' => '/blog/the-urban-jungle'
        ],
        'routes' => [
            '/something/else' => '/blog/focus-and-blur',
            '/another/one/(.*)' => '/blog/$1'
        ],
        'blog' => [
            'route' => ''
        ]
    ]
];
