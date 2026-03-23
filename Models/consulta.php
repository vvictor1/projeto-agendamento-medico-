<?php
namespace App\Models;
class Consulta {
    public $id;
    public $pacienteId;
    public $profissionalId;
    public $data;
    public $status;

    public function __construct($pacienteId, $profissionalId, $data, $status = 'agendada') {
        $this->id = uniqid();
        $this->pacienteId = $pacienteId;
        $this->profissionalId = $profissionalId;
        $this->data = $data;
        $this->status = $status;
    }
}
?>