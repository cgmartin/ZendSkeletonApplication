<?php
return array(
    'modules' => array(
        'Application',
        'ZendDeveloperTools',
        'ZfcBase',
        'CgmConfigAdmin',
        'ZF2FileUploadExamples',
    ),
    'module_listener_options' => array(
        'config_glob_paths'    => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
        'module_paths' => array(
            './module',
            './vendor',
            '../../../Src/zf2modules',
        ),
    ),
);
