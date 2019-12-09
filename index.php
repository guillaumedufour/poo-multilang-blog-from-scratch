<?php

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