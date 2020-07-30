<?php
return [
    'router' => [
        'routes' => [
            'api.rest.doctrine.categoria' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/api/categoria[/:categoria_id]',
                    'defaults' => [
                        'controller' => 'Api\\V1\\Rest\\Categoria\\Controller',
                    ],
                ],
            ],
            'api.rest.doctrine.exercicio' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/api/exercicio[/:exercicio_id]',
                    'defaults' => [
                        'controller' => 'Api\\V1\\Rest\\Exercicio\\Controller',
                    ],
                ],
            ],
            'api.rest.doctrine.video' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/api/video[/:video_id]',
                    'defaults' => [
                        'controller' => 'Api\\V1\\Rest\\Video\\Controller',
                    ],
                ],
            ],
            'api.rest.doctrine.imagem' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/api/imagem[/:imagem_id]',
                    'defaults' => [
                        'controller' => 'Api\\V1\\Rest\\Imagem\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'api.rest.doctrine.categoria',
            1 => 'api.rest.doctrine.exercicio',
            2 => 'api.rest.doctrine.video',
            3 => 'api.rest.doctrine.imagem',
        ],
    ],
    'zf-rest' => [
        'Api\\V1\\Rest\\Categoria\\Controller' => [
            'listener' => \Api\V1\Rest\Categoria\CategoriaResource::class,
            'route_name' => 'api.rest.doctrine.categoria',
            'route_identifier_name' => 'categoria_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'categoria',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Cadastro\Entity\Categoria::class,
            'collection_class' => \Api\V1\Rest\Categoria\CategoriaCollection::class,
            'service_name' => 'Categoria',
        ],
        'Api\\V1\\Rest\\Exercicio\\Controller' => [
            'listener' => \Api\V1\Rest\Exercicio\ExercicioResource::class,
            'route_name' => 'api.rest.doctrine.exercicio',
            'route_identifier_name' => 'exercicio_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'exercicio',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Cadastro\Entity\Exercicio::class,
            'collection_class' => \Api\V1\Rest\Exercicio\ExercicioCollection::class,
            'service_name' => 'Exercicio',
        ],
        'Api\\V1\\Rest\\Video\\Controller' => [
            'listener' => \Api\V1\Rest\Video\VideoResource::class,
            'route_name' => 'api.rest.doctrine.video',
            'route_identifier_name' => 'video_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'video',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Cadastro\Entity\Video::class,
            'collection_class' => \Api\V1\Rest\Video\VideoCollection::class,
            'service_name' => 'Video',
        ],
        'Api\\V1\\Rest\\Imagem\\Controller' => [
            'listener' => \Api\V1\Rest\Imagem\ImagemResource::class,
            'route_name' => 'api.rest.doctrine.imagem',
            'route_identifier_name' => 'imagem_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'imagem',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Cadastro\Entity\Imagem::class,
            'collection_class' => \Api\V1\Rest\Imagem\ImagemCollection::class,
            'service_name' => 'Imagem',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'Api\\V1\\Rest\\Categoria\\Controller' => 'HalJson',
            'Api\\V1\\Rest\\Exercicio\\Controller' => 'HalJson',
            'Api\\V1\\Rest\\Video\\Controller' => 'HalJson',
            'Api\\V1\\Rest\\Imagem\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'Api\\V1\\Rest\\Categoria\\Controller' => [
                0 => 'application/vnd.api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Api\\V1\\Rest\\Exercicio\\Controller' => [
                0 => 'application/vnd.api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Api\\V1\\Rest\\Video\\Controller' => [
                0 => 'application/vnd.api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Api\\V1\\Rest\\Imagem\\Controller' => [
                0 => 'application/vnd.api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'Api\\V1\\Rest\\Categoria\\Controller' => [
                0 => 'application/vnd.api.v1+json',
                1 => 'application/json',
            ],
            'Api\\V1\\Rest\\Exercicio\\Controller' => [
                0 => 'application/vnd.api.v1+json',
                1 => 'application/json',
            ],
            'Api\\V1\\Rest\\Video\\Controller' => [
                0 => 'application/vnd.api.v1+json',
                1 => 'application/json',
            ],
            'Api\\V1\\Rest\\Imagem\\Controller' => [
                0 => 'application/vnd.api.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \Cadastro\Entity\Categoria::class => [
                'route_identifier_name' => 'categoria_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'api.rest.doctrine.categoria',
                'hydrator' => 'Api\\V1\\Rest\\Categoria\\CategoriaHydrator',
            ],
            \Api\V1\Rest\Categoria\CategoriaCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'api.rest.doctrine.categoria',
                'is_collection' => true,
            ],
            \Cadastro\Entity\Exercicio::class => [
                'route_identifier_name' => 'exercicio_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'api.rest.doctrine.exercicio',
                'hydrator' => 'Api\\V1\\Rest\\Exercicio\\ExercicioHydrator',
            ],
            \Api\V1\Rest\Exercicio\ExercicioCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'api.rest.doctrine.exercicio',
                'is_collection' => true,
            ],
            \Cadastro\Entity\Video::class => [
                'route_identifier_name' => 'video_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'api.rest.doctrine.video',
                'hydrator' => 'Api\\V1\\Rest\\Video\\VideoHydrator',
            ],
            \Api\V1\Rest\Video\VideoCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'api.rest.doctrine.video',
                'is_collection' => true,
            ],
            \Cadastro\Entity\Imagem::class => [
                'route_identifier_name' => 'imagem_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'api.rest.doctrine.imagem',
                'hydrator' => 'Api\\V1\\Rest\\Imagem\\ImagemHydrator',
            ],
            \Api\V1\Rest\Imagem\ImagemCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'api.rest.doctrine.imagem',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-apigility' => [
        'doctrine-connected' => [
            \Api\V1\Rest\Categoria\CategoriaResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Api\\V1\\Rest\\Categoria\\CategoriaHydrator',
            ],
            \Api\V1\Rest\Exercicio\ExercicioResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Api\\V1\\Rest\\Exercicio\\ExercicioHydrator',
            ],
            \Api\V1\Rest\Video\VideoResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Api\\V1\\Rest\\Video\\VideoHydrator',
            ],
            \Api\V1\Rest\Imagem\ImagemResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Api\\V1\\Rest\\Imagem\\ImagemHydrator',
            ],
        ],
    ],
    'doctrine-hydrator' => [
        'Api\\V1\\Rest\\Categoria\\CategoriaHydrator' => [
            'entity_class' => \Cadastro\Entity\Categoria::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
        'Api\\V1\\Rest\\Exercicio\\ExercicioHydrator' => [
            'entity_class' => \Cadastro\Entity\Exercicio::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
        'Api\\V1\\Rest\\Video\\VideoHydrator' => [
            'entity_class' => \Cadastro\Entity\Video::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
        'Api\\V1\\Rest\\Imagem\\ImagemHydrator' => [
            'entity_class' => \Cadastro\Entity\Imagem::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
    ],
    'zf-content-validation' => [
        'Api\\V1\\Rest\\Categoria\\Controller' => [
            'input_filter' => 'Api\\V1\\Rest\\Categoria\\Validator',
        ],
        'Api\\V1\\Rest\\Exercicio\\Controller' => [
            'input_filter' => 'Api\\V1\\Rest\\Exercicio\\Validator',
        ],
        'Api\\V1\\Rest\\Video\\Controller' => [
            'input_filter' => 'Api\\V1\\Rest\\Video\\Validator',
        ],
        'Api\\V1\\Rest\\Imagem\\Controller' => [
            'input_filter' => 'Api\\V1\\Rest\\Imagem\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'Api\\V1\\Rest\\Categoria\\Validator' => [
            0 => [
                'name' => 'nome',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 255,
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'imagem',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            2 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'id',
            ],
            3 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'categoria',
            ],
        ],
        'Api\\V1\\Rest\\Exercicio\\Validator' => [
            0 => [
                'name' => 'nome',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 255,
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'descricao',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            2 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'id',
            ],
            3 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'categoria',
            ],
        ],
        'Api\\V1\\Rest\\Video\\Validator' => [
            0 => [
                'name' => 'titulo',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 255,
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'url',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 255,
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'descricao',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 65000,
                        ],
                    ],
                ],
            ],
            3 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'id',
            ],
            4 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'exercicio',
            ],
        ],
        'Api\\V1\\Rest\\Imagem\\Validator' => [
            0 => [
                'name' => 'titulo',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 255,
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'src',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 255,
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'descricao',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 65000,
                        ],
                    ],
                ],
            ],
            3 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'exercicio',
            ],
            4 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'id',
            ],
        ],
    ],
];
