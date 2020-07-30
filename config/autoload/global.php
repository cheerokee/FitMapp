<?php
return [
    'pagarme' => [
        'api_key' => 'ak_test_MW7yxxnPhXfM3Zd6CgMawm2rALnufk',
        'api_encript_key' => 'ek_test_kW3weCipprvqh0gzpnT73C0dY6wxM5',
    ],
    'mail' => [
        'name' => 'smtp.gmail.com',
        'host' => 'smtp.gmail.com',
        'connection_class' => 'login',
        'connection_config' => [
            'username' => 'contato@inovensti.com.br',
            'password' => 'inovensti123456',
            'ssl' => 'tls',
            'port' => 587,
            'from' => 'contato@inovensti.com.br',
            'name_from' => 'Golaço FC',
            'charset' => 'UTF8',
            'driverOptions' => [
                'charset' => 'UTF8',
            ],
        ],
    ],
    'service_manager' => [
        'factories' => [
            \Zend\Db\Adapter\Adapter::class => \Zend\Db\Adapter\AdapterServiceFactory::class,
        ],
    ],
    'zf-content-negotiation' => [
        'selectors' => [
            'HTML-Json' => [
                \ZF\ContentNegotiation\JsonModel::class => [
                    0 => 'application/json',
                    1 => 'application/*+json',
                ],
                \ZF\ContentNegotiation\ViewModel::class => [
                    0 => 'text/html',
                ],
            ],
        ],
    ],
    'translator' => [
        \locale::class => 'pt_BR',
        'translation_file_patterns' => [
            0 => [
                'type' => 'gettext',
                'base_dir' => 'C:\\wamp64\\www\\golaco/data/language',
                'pattern' => '%s.mo',
            ],
        ],
    ],
    'db' => [
        'adapters' => [
            'dummy' => [],
        ],
    ],
    'router' => [
        'routes' => [
            'oauth' => [
                'options' => [
                    'spec' => '%oauth%',
                    'regex' => '(?P<oauth>(/oauth))',
                ],
                'type' => 'regex',
            ],
        ],
    ],
];
