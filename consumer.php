<?php

$evento = require __DIR__ . '/ConsultaAgendadaEvent.php';

echo "======================" . PHP_EOL;
echo "EVENTO RECEBIDO" . PHP_EOL;
echo "Paciente: " . $evento['paciente'] . PHP_EOL;
echo "Data: " . $evento['data'] . PHP_EOL;
echo "Read Model atualizado!" . PHP_EOL;
echo "======================" . PHP_EOL;