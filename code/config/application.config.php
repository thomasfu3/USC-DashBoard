<?php
return array(
    // This should be an array of module namespaces used in the application.
    'modules' => array(
        'Application'
    ),
    'module_listener_options' => array(
        'config_glob_paths'    => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
        'module_paths' => array(
            './module',
            './vendor',
        ),
    ),
);
