<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'index' => 'Application\Controller\IndexController',
        ),
    ),

//  set config for router
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Literal',
                'options' => array(
                   'route' => '/',
                    'defaults' => array(
                        'controller' => 'index',
                        'action' => 'index',
                    ),
                ),
            ),
        ),
    ),

//set config for views
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_path_stack' => array(__DIR__ . '/../View'),
    ),
);