<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://sitemap/sitemap.yaml',
    'modified' => 1490392681,
    'data' => [
        'enabled' => true,
        'route' => '/sitemap',
        'changefreq' => 'daily',
        'priority' => 1,
        'ignores' => [
            0 => '/blog/blog-post-to-ignore',
            1 => '/ignore-this-route'
        ]
    ]
];
