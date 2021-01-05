<?php

    ini_set('display_errors', 1);

    $Classes = glob( __DIR__ . '/class/*.php');

    foreach ($Classes as $file) {
        require_once $file;   
    }
