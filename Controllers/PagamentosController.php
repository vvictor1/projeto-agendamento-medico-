<?php
namespace App\Controllers;
use App\Models\Pagamento;

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
