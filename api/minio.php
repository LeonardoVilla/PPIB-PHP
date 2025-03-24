<?php
require 'vendor/autoload.php';

use Minio\MinioClient;

$client = new MinioClient([
    'accessKey' => 'minio',
    'secretKey' => 'minio123',
    'endpoint'  => 'minio:9000',
    'secure'    => false
]);

$bucket = 'fotobucket';
?>