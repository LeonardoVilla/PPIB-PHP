<?php
require 'db.php';
require 'minio.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];

    // Carregar para o MinIO
    try {
        $client->putObject($bucket, $fileName, $fileTmpName);
        echo json_encode(['message' => 'Arquivo carregado com sucesso']);
    } catch (Exception $e) {
        echo json_encode(['error' => $e->getMessage()]);
    }
} else {
    echo json_encode(['error' => 'Arquivo não enviado']);
}
?>
