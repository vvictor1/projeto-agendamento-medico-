<?php
class Paciente {
    public $id;
    public $nome;
    public $email;
    public $telefone;

    public function __construct($nome, $email, $telefone) {
        $this->id = uniqid();
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
    }
}
?>