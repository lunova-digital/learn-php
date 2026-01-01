<?php

@$page = $_GET['page'];
$page = strtolower($page);

require_once __DIR__.'/partials/header.php';

if ($page == null || $page === 'home') {
    require_once __DIR__.'/pages/home.php';
} elseif ($page === 'about') {
    require_once __DIR__.'/pages/about.php';
} elseif ($page === 'contact') {
    require_once __DIR__.'/pages/contact.php';
} else {
    require_once __DIR__.'/pages/404.php';
}

require_once __DIR__.'/partials/footer.php';
