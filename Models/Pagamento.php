<?php
namespace App\Models;
class Pagamento {
    public $id;
    public $consultaId;
    public $valor;
    public $status;
    public $metodo;

    public function __construct($consultaId, $valor, $metodo, $status = 'pendente') {
        $this->id = uniqid();
        $this->consultaId = $consultaId;
        $this->valor = $valor;
        $this->metodo = $metodo;
        $this->status = $status;
    }
}
?>
