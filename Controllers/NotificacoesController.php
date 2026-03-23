<?php
namespace App\Controllers;
use App\Models\Notificacao;

class NotificacoesController {
    private $notificacoes = [];

    public function getAll() {
        return $this->notificacoes;
    }

    public function create($usuarioId, $mensagem, $tipo) {
        $notificacao = new Notificacao($usuarioId, $mensagem, $tipo);
        $this->notificacoes[] = $notificacao;
        return $notificacao;
    }
}
?>
