// public/index.php
require_once '../system/Router.php';

$url = isset($_GET['url']) ? explode('/', filter_var(trim($_GET['url'], '/'), FILTER_SANITIZE_URL)) : [];
Router::route($url);
