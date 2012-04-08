<?php
return array(
    'modules' => array(
        'Application',
        'OcraComposer',
        'ZfPhpcrOdm',
        'ZfPhpcrOdmSample',
    ),
    'module_listener_options' => array( 
        'config_cache_enabled' => false,
        'cache_dir'            => 'data/cache',
        'module_paths' => array(
            './module',
            './vendor',
            './vendor/ocramius',
        ),
    ),
);
