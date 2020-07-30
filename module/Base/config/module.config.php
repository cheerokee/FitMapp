<?php
namespace Base;

return array(
    'asset_bundle' => array(
        'assets' => array(
            'less' => array('@zfRootPath/vendor/twitter/bootstrap/less/bootstrap.less')
        )
    ),
     'view_helpers' => array(
         'invokables' => array(),
     ),
    'router' => array(
        'routes' => array(            
            'base' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/base',
                    'defaults' => array(
                        '__NAMESPACE__' => __NAMESPACE__ . '\Controller',
                        'controller' => 'Index',
                        'action' => 'index'
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/[:controller[/:action[/:id]][/page/:page][/order_by/:order_by][/:order]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '(?!\bpage\b)(?!\border_by\b)[a-zA-Z][a-zA-Z0-9_-]*',
                                'id' => '\d+',
                                'page' => '\d+',
                                'order_by' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'order' => 'ASC|DESC',
                            ),
                            'defaults' => array(
                                '__NAMESPACE__' => __NAMESPACE__ . '\Controller',
                                'controller' => 'Index',
                                'action' => 'index'
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
            'error/404' => __DIR__ . '/../view/error/404.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml'
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view'
        ),
        'strategies' => array(
            'ViewJsonStrategy'
        ),
    ),
    'doctrine'=>array(
        'driver' => array(
            __NAMESPACE__.'_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/'.__NAMESPACE__.'/Entity')
            ),
            'orm_default' => array(
                'drivers' => array(
                    __NAMESPACE__.'\Entity' =>  __NAMESPACE__.'_driver'
                ),
            ),
        ),
        'configuration' => array(
            'orm_default' => array(
                'datetime_functions' => array(
                    'date' => 'DoctrineExtensions\Query\Mysql\Date',
                    'date_format' => 'DoctrineExtensions\Query\Mysql\DateFormat',
                    'dateadd' => 'DoctrineExtensions\Query\Mysql\DateAdd',
                    'datediff' => 'DoctrineExtensions\Query\Mysql\DateDiff',
                    'day' => 'DoctrineExtensions\Query\Mysql\Day',
                    'dayname' => 'DoctrineExtensions\Query\Mysql\DayName',
                    'last_day' => 'DoctrineExtensions\Query\Mysql\LastDay',
                    'minute' => 'DoctrineExtensions\Query\Mysql\Minute',
                    'second' => 'DoctrineExtensions\Query\Mysql\Second',
                    'strtodate' => 'DoctrineExtensions\Query\Mysql\StrToDate',
                    'time' => 'DoctrineExtensions\Query\Mysql\Time',
                    'timestampadd' => 'DoctrineExtensions\Query\Mysql\TimestampAdd',
                    'timestampdiff' => 'DoctrineExtensions\Query\Mysql\TimestampDiff',
                    'timediff' => 'DoctrineExtensions\Query\Mysql\TimeDiff',
                    'week' => 'DoctrineExtensions\Query\Mysql\Week',
                    'weekday' => 'DoctrineExtensions\Query\Mysql\WeekDay',
                    'year' => 'DoctrineExtensions\Query\Mysql\Year',
                    'SEC_TO_TIME' => 'DoctrineExtensions\Query\Mysql\SecToTime',
                    'TIME_TO_SEC' => 'DoctrineExtensions\Query\Mysql\TimeToSec',
                ),
                'numeric_functions' => array(
                    'acos'  => 'DoctrineExtensions\Query\Mysql\Acos',
                    'asin' => 'DoctrineExtensions\Query\Mysql\Asin',
                    'atan2' => 'DoctrineExtensions\Query\Mysql\Atan2',
                    'atan' => 'DoctrineExtensions\Query\Mysql\Atan',
                    'cos' => 'DoctrineExtensions\Query\Mysql\Cos',
                    'cot' => 'DoctrineExtensions\Query\Mysql\Cot',
                    'hour' => 'DoctrineExtensions\Query\Mysql\Hour',
                    'pi' => 'DoctrineExtensions\Query\Mysql\Pi',
                    'power' => 'DoctrineExtensions\Query\Mysql\Power',
                    'quarter' => 'DoctrineExtensions\Query\Mysql\Quarter',
                    'rand' => 'DoctrineExtensions\Query\Mysql\Rand',
                    'round' => 'DoctrineExtensions\Query\Mysql\Round',
                    'sin' => 'DoctrineExtensions\Query\Mysql\Sin',
                    'std' => 'DoctrineExtensions\Query\Mysql\Std',
                    'tan' => 'DoctrineExtensions\Query\Mysql\Tan',
                ),
                'string_functions' => array(
                    'binary' => 'DoctrineExtensions\Query\Mysql\Binary',
                    'char_length' => 'DoctrineExtensions\Query\Mysql\CharLength',
                    'concat_ws' => 'DoctrineExtensions\Query\Mysql\ConcatWs',
                    'countif' => 'DoctrineExtensions\Query\Mysql\CountIf',
                    'crc32' => ' DoctrineExtensions\Query\Mysql\Crc32',
                    'degrees' => 'DoctrineExtensions\Query\Mysql\Degrees',
                    'field' => 'DoctrineExtensions\Query\Mysql\Field',
                    'find_in_set' => 'DoctrineExtensions\Query\Mysql\FindInSet',
                    'group_concat' => 'DoctrineExtensions\Query\Mysql\GroupConcat',
                    'ifelse' => 'DoctrineExtensions\Query\Mysql\IfElse',
                    'ifnull' => 'DoctrineExtensions\Query\Mysql\IfNull',
                    'match_against' => 'DoctrineExtensions\Query\Mysql\MatchAgainst',
                    'md5' => 'DoctrineExtensions\Query\Mysql\Md5',
                    'month' => 'DoctrineExtensions\Query\Mysql\Month',
                    'monthname' => 'DoctrineExtensions\Query\Mysql\MonthName',
                    'nullif' => 'DoctrineExtensions\Query\Mysql\NullIf',
                    'radians' => 'DoctrineExtensions\Query\Mysql\Radians',
                    'regexp' => 'DoctrineExtensions\Query\Mysql\Regexp',
                    'replace' => 'DoctrineExtensions\Query\Mysql\Replace',
                    'sha1' => 'DoctrineExtensions\Query\Mysql\Sha1',
                    'sha2' => 'DoctrineExtensions\Query\Mysql\Sha2',
                    'soundex' => 'DoctrineExtensions\Query\Mysql\Soundex',
                    'uuid_short' => 'DoctrineExtensions\Query\Mysql\UuidShort',
                ),

            )
        )
    )
);
