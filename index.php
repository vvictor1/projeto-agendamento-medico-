<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once 'Controllers/ConsultasController.php';

use App\Controllers\ConsultasController;

function executarOperacaoComRetry($funcao, $maxTentativas = 3) {
    $tentativa = 0;
    while ($tentativa < $maxTentativas) {
        try {
            $tentativa++;
            return $funcao(); 
        } catch (Exception $e) {
            if ($tentativa >= $maxTentativas) {
                throw $e; 
            }
            sleep(1); 
        }
    }
}


$controller = new ConsultasController();

echo "<h2>CRIANDO CONSULTA COM RESILIÊNCIA...</h2>";


$resultado = executarOperacaoComRetry(function() use ($controller) {
    return $controller->create(
        "Pedro",
        "Dr. João",
        "2026-05-10 14:00:00"
    );
});


echo "<pre>";
print_r($resultado);
echo "</pre>";

echo "<h2>CONSULTAS SALVAS:</h2>";

echo "<pre>";
print_r($controller->getAll());
echo "</pre>";