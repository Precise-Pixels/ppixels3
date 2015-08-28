<?php
# Backend framework by http://jalproductions.co.uk/

$q = $_GET['q'];

$path = preg_replace('#\/$|.php#', '', $q);

if(empty($path)) {                                  // HOME
    $file = 'index';
} elseif(file_exists("views/$path.php")) {          // PAGE
    $file = $path;
} else {                                            // NOT FOUND
    $file = '404';
}

$isHome    = ($q == '');

require_once('front-view.php');