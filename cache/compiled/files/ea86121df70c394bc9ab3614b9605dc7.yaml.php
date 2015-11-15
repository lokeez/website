<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/plugins/random/random.yaml',
    'modified' => 1445850028,
    'data' => [
        'enabled' => true,
        'route' => '/random',
        'redirect' => true,
        'filters' => [
            'category' => 'blog'
        ],
        'filter_combinator' => 'and'
    ]
];
