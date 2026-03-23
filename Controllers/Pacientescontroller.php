<?php
namespace App\Controllers;
use App\Models\Paciente;
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