<?php
require_once '../Models/Pagamento.php';

class PagamentosController {
    private $pagamentos = [];

    public function getAll() {
        return $this->pagamentos;
    }

    public function create($consultaId, $valor, $metodo) {
        $pagamento = new Pagamento($consultaId, $valor, $metodo);
        $this->pagamentos[] = $pagamento;
        return $pagamento;
    }

    public function atualizarStatus($id, $status) {
        foreach ($this->pagamentos as $pagamento) {
            if ($pagamento->id == $id) {
                $pagamento->status = $status;
                return $pagamento;
            }
        }
        return null;
    }
}
?>
