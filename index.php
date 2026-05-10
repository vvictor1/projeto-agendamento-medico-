<?php

require_once 'Controllers/ConsultasController.php';

use App\Controllers\ConsultasController;

$controller = new ConsultasController();

echo "<h2>CRIANDO CONSULTA...</h2>";

$resultado = $controller->create(
    "Pedro",
    "Dr. João",
    "2026-05-10 14:00:00"
);

echo "<pre>";
print_r($resultado);
echo "</pre>";

echo "<h2>CONSULTAS SALVAS:</h2>";

echo "<pre>";
print_r($controller->getAll());
echo "</pre>";