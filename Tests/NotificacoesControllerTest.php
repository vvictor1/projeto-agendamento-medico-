<?php

use PHPUnit\Framework\TestCase;
use App\Controllers\NotificacoesController;
use App\Models\Notificacao;

class NotificacoesControllerTest extends TestCase {

    public function testCreateNotificacao() {
        // Arrange
        $controller = new NotificacoesController();

        // Act
        $notificacao = $controller->create(1, 'Mensagem de teste', 'alerta');

        // Assert
        $this->assertNotNull($notificacao->id);
        $this->assertEquals(1, $notificacao->usuarioId);
        $this->assertEquals('Mensagem de teste', $notificacao->mensagem);
        $this->assertEquals('alerta', $notificacao->tipo);
    }

    public function testGetAllNotificacoes() {
        // Arrange
        $controller = new NotificacoesController();

        // Act
        $controller->create(1, 'Mensagem teste', 'info');
        $notificacoes = $controller->getAll();

        // Assert
        $this->assertCount(1, $notificacoes);
    }
}