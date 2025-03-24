<?php
header('Content-Type: application/json');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = rtrim($uri, '/');

switch ($uri) {
    case '/upload':
        include 'upload.php';
        break;
    case '/servers':
        include 'servers.php';
        break;
    default:
        echo json_encode(['error' => 'Endpoint não encontrado']);
}
?>
