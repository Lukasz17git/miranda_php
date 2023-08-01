<?php
require_once 'vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '..');
$dotenv->load();

require_once 'requests/router.php';
require_once 'posts/postsRouter.php';

$url = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

use eftec\bladeone\BladeOne;

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';
$blade = new BladeOne($views, $cache, BladeOne::MODE_DEBUG);

if ($method === 'GET') {
   handleGetRequest($url);
} elseif ($method === 'POST') {
   handlePostRequest($url);
} else {
   echo 'unknown request';
}
