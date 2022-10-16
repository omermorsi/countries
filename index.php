<?php
$url = $_SERVER['REQUEST_URI'];
switch ($url) {
    case '':
    case '/':
        require __DIR__ . '/view/index.php';
        break;
}
?>
