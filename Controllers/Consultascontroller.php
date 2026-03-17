<?php
require_once '../Models/Consulta.php';

class ConsultasController {
    private $consultas = [];

    public function getAll() {
        return $this->consultas;
    }

    public function create($pacienteId, $profissionalId, $data) {
        $consulta = new Consulta($pacienteId, $profissionalId, $data);
        $this->consultas[] = $consulta;
        return $consulta;
    }
}
?>