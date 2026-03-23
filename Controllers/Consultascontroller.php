<?php
namespace App\Controllers;
use App\Models\Consulta;
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