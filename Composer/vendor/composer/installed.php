<?php return array(
    'root' => array(
        'name' => 'hcodebr/composer',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => '19440b5fc09738909fcbd1503ed81ef032377b64',
        'type' => 'projeto',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'hcodebr/composer' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '19440b5fc09738909fcbd1503ed81ef032377b64',
            'type' => 'projeto',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'monolog/monolog' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => 'd3d495b742cacf9c0af87867bf87dab2fc591e68',
            'type' => 'library',
            'install_path' => __DIR__ . '/../monolog/monolog',
            'aliases' => array(
                0 => '3.x-dev',
            ),
            'dev_requirement' => false,
        ),
        'psr/log' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => 'fe5ea303b0887d5caefd3d431c3e61ad47037001',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/log',
            'aliases' => array(
                0 => '3.x-dev',
            ),
            'dev_requirement' => false,
        ),
        'psr/log-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '3.0.0',
            ),
        ),
    ),
);
