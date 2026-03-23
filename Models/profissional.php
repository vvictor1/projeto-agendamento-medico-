<?php
namespace App\Models;
class Profissional {
    public $id;
    public $nome;
    public $especialidade;
    public $crm;

    public function __construct($nome, $especialidade, $crm) {
        $this->id = uniqid();
        $this->nome = $nome;
        $this->especialidade = $especialidade;
        $this->crm = $crm;
    }
}
?>