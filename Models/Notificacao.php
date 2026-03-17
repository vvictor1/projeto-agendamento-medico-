<?php

class Notificacao {
    public $id;
    public $usuarioId;
    public $mensagem;
    public $tipo;
    public $data;

    public function __construct($usuarioId, $mensagem, $tipo) {
        $this->id = uniqid();
        $this->usuarioId = $usuarioId;
        $this->mensagem = $mensagem;
        $this->tipo = $tipo;
        $this->data = date("Y-m-d H:i:s");
    }
}
?>
