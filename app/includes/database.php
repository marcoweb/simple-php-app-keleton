<?php
function database_get_connection() {
    $config = application_get_config('database');
    return new \PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'], $config['dbuser'], $config['passwd']);
}