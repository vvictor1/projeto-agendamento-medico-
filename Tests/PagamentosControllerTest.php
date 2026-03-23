<?php

use PHPUnit\Framework\TestCase;
use App\Controllers\PagamentosController;
use App\Models\Pagamento;

class PagamentosControllerTest extends TestCase {

    public function testCreatePagamento() {
        // Arrange
        $controller = new PagamentosController();

        // Act
        $pagamento = $controller->create(1, 150, 'cartao');

        // Assert
        $this->assertNotNull($pagamento->id);
        $this->assertEquals(1, $pagamento->consultaId);
        $this->assertEquals(150, $pagamento->valor);
        $this->assertEquals('cartao', $pagamento->metodo);
        $this->assertEquals('pendente', $pagamento->status);
    }

    public function testAtualizarStatus() {
        // Arrange
        $controller = new PagamentosController();
        $pagamento = $controller->create(2, 200, 'boleto');

        // Act
        $updated = $controller->atualizarStatus($pagamento->id, 'pago');

        // Assert
        $this->assertEquals('pago', $updated->status);
    }

    public function testGetAllPagamentos() {
        // Arrange
        $controller = new PagamentosController();

        // Act
        $controller->create(1, 100, 'cartao');
        $controller->create(2, 200, 'boleto');
        $pagamentos = $controller->getAll();

        // Assert
        $this->assertCount(2, $pagamentos);
    }
}