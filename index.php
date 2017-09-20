<?php

include 'vendor/autoload.php';


\App\Router::add('index', 'index.php', 'index');
\App\Router::add('gallery', 'gallery.php', 'gallery');
\App\Router::add('aboutus', 'aboutus.php', 'aboutus');
\App\Router::add('userid', 'userid.php', 'user');

\App\Router::getArray();

$routes = \App\Router::getArray();
print_r ($routes);

echo 'done';
exit;