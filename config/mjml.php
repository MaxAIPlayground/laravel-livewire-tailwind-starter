<?php

/**
 * Configuration for Laravel MJML Package.
 */
return [
    /*
     * The package will auto-detect the path to the locally installed MJML binary. In case the package is not able to find the
     * binary or the binary has been installed globally, please set this property to false and manually specify the path
     * below instead.
     */
    'auto_detect_path' => env('MJML_AUTO_DETECT_PATH', true),

    'node_path' => env('MJML_NODE_PATH', 'node'),

    /*
     * The path to the MJML binary
     */
     'path_to_binary' => env('MJML_PATH_TO_BINARY', ''),
];
