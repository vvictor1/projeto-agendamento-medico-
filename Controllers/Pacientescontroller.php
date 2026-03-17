<?php
require_once '../Models/Paciente.php';

class PacientesController {
    private $pacientes = [];

    public function getAll() {
        return $this->pacientes;
    }

    public function create($nome, $email, $telefone) {
        $paciente = new Paciente($nome, $email, $telefone);
        $this->pacientes[] = $paciente;
        return $paciente;
    }
}
?>