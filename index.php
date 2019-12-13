<?php

include_once '_config/config.php';
include_once '_config/db.php';
include_once '_functions/functions.php';

include_once '_classes/Authors.php';
include_once '_classes/Articles.php';
include_once '_classes/Categories.php';

if (isset($_GET['page']) && !empty($_GET['page'])) {
    $page = trim(strtolower($_GET['page']));
} else {
    $page = 'home';
}

$allPages = scandir('controllers/');

if (in_array($page.'_controller.php', $allPages)) {
    include_once('models/'.$page.'_model.php');
    include_once('controllers/'.$page.'_controller.php');
    include_once('views/'.$page.'_view.php');
} else {
    echo '404 Error';
}