<?php

namespace App\Controllers;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Formatter\JsonFormatter;

class ConsultasController {

    private $logger;
    private $consultas = [];

    public function __construct() {

        // Inicializa o logger
        $this->logger = new Logger('api-agendamento');

        // Caminho do arquivo de log
        $handler = new StreamHandler(
            __DIR__ . '/../logs/agendamento.log',
            Logger::INFO
        );

        // Formato JSON
        $handler->setFormatter(new JsonFormatter());

        // Adiciona o handler
        $this->logger->pushHandler($handler);
    }

    public function create($paciente, $medico, $data) {

        // Log estruturado
        $this->logger->info(
            "Nova consulta solicitada no sistema",
            [
                'paciente' => $paciente,
                'medico' => $medico,
                'data_hora' => $data
            ]
        );

        $novaConsulta = [
            "id" => uniqid(),
            "paciente" => $paciente,
            "medico" => $medico,
            "data" => $data
        ];

        $this->consultas[] = $novaConsulta;

        return [
            "status" => "Sucesso",
            "dados" => $novaConsulta
        ];
    }

    public function getAll() {
        return $this->consultas;
    }
}