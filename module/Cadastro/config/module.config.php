<?php
namespace Cadastro;

return array(
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
            'add-user'     => __DIR__ . '/../view/mailer/add-user.phtml',
            'mail-lostPassword'     => __DIR__ . '/../view/mailer/mail-lostPassword.phtml'
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view'
        ),
    ),
    'doctrine' => array(
        'driver' => array(
            __NAMESPACE__ . '_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/' . __NAMESPACE__ . '/Entity')
            ),
            'orm_default' => array(
                'drivers' => array(
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
                ),
            ),
        ),
        'configuration' => array(
            'orm_default' => array(
                'string_functions' => array(
                    'Year' => 'DoctrineExtensions\Query\Mysql\Year',
                    'Date' => 'DoctrineExtensions\Query\Mysql\Date',
                )
            )
        )
    )
);
