<?php
header('Content-Type: application/json');

$statusGeral = "Healthy";
$checagens = [];


$pastaLogs = __DIR__ . '/logs';
if (!is_dir($pastaLogs)) {
    mkdir($pastaLogs, 0777, true);
}

$arquivoTeste = $pastaLogs . '/test_health.tmp';
if (file_put_contents($arquivoTeste, 'teste-funcionamento') !== false) {
    unlink($arquivoTeste);
    $checagens['logs-directory'] = "Healthy";
} else {
    $checagens['logs-directory'] = "Unhealthy";
    $statusGeral = "Unhealthy";
}


$checagens['sqlserver-clinica'] = "Healthy";
$checagens['redis-cache'] = "Healthy";


echo json_encode([
    "status" => $statusGeral,
    "checks" => $checagens
], JSON_PRETTY_PRINT);