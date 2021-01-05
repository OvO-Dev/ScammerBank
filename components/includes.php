<?php

    ini_set('display_errors', 1);

    require_once __DIR__ . '/dbconf.php';

    $Classes = glob( __DIR__ . '/class/*.php');

    foreach ($Classes as $file) {
        require_once $file;   
    }
