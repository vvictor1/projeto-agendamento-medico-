<?php
namespace App\Controllers;
use App\Models\Notificacao;

class NotificacoesController {
    // Ajuste: Implementar políticas de Retry para a conexão com a API futuramente
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
