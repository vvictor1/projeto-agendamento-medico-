<?php

$evento = require __DIR__ . '/ConsultaAgendadaEvent.php';

echo "✅ Consulta recebida com sucesso!" . PHP_EOL;
echo "Paciente: " . $evento['paciente'] . PHP_EOL;
echo "Data: " . $evento['data'] . PHP_EOL;