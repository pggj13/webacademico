<?php

require './environment.php';
$config = array();
global $config;

if (ENVIRONMENT == "desenvolvedor") {

    $config['dbname'] = "webacademico";
    $config['host'] = "localhost";
    $config['dbuser'] = "root";
    $config['dbpass'] = "";
    
    
} else {
    $config['dbname'] = "u162389255_venda";
    $config['host'] = "mysql.hostinger.com.br";
    $config['dbuser'] = "u162389255_venda";
    $config['dbpass'] = "lau13061992";
}

