<?php

use App\Services\Router;

Router::page('/test', 'test.php');
Router::page('/test2', 'test2.php');

Router::enable();