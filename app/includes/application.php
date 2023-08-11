<?php
$_application_current_request = [];

function application_uses(string $include_name) {
    global $_base_path;
    $include_path = $_base_path . 'includes/' . $include_name . '.php';
    if(file_exists($include_path)) {
        require_once($include_path);
    }
}

function application_get_config($configName) {
    global $_config_path;
    $config_file = $_config_path . $configName . '.config.php';
    if(file_exists($config_file)) {
        return include($config_file);
    }
}

function application_run() {
    global $_application_current_request;
    $_application_current_request = [
        'uri'       => $_SERVER['REQUEST_URI'],
        'method'    => $_SERVER['REQUEST_METHOD']
    ];

    application_uses('database');
    echo '<pre>';
    var_dump($_application_current_request);
    echo '</pre>';
}