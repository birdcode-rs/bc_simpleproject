<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Simple Project',
    'description' => 'Additional items for your project',
    'category' => 'fe',
    'author' => 'Bird Code',
    'author_email' => 'bird.dev@birdcode.in.rs',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '0.1.0',
    'constraints' => [
        'depends' => [
            'php' => '8.1.0-8.4.99',
            'typo3' => '13.0.0-13.9.99',
            'backend' => '13.0.0-13.9.99',
            'extbase' => '13.0.0-13.9.99',
            'fluid' => '13.0.0-13.9.99',
            'frontend' => '13.0.0-13.9.99',
        ],
        'conflicts' => [],
        'suggests' => [
            'headless' => '4.0.0-4.9.99',
        ],
    ],
];

