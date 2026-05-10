<?php

namespace App\Controllers;

use App\Models\Consulta;
use PDO;

class ConsultasController {

    private $conn;

    public function __construct() {
        $this->conn = new PDO(
            "mysql:host=localhost;dbname=agendamento",
            "root",
            ""
        );
    }

    // GET -> READ MODEL
    public function getAll() {

        $sql = "SELECT * FROM consultas_read_model";

        $stmt = $this->conn->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // POST -> COMMAND
    public function create($paciente, $medico, $data) {

        $status = "Agendada";

        $sql = "INSERT INTO consultas_read_model 
        (paciente, medico, data_consulta, status)
        VALUES (?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([
            $paciente,
            $medico,
            $data,
            $status
        ]);

        echo "Evento ConsultaAgendada disparado!";

        return [
            "paciente" => $paciente,
            "medico" => $medico,
            "data" => $data,
            "status" => $status
        ];
    }
}
?>