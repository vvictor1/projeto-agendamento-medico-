<?php

use PHPUnit\Framework\TestCase;
use App\Controllers\ConsultasController;
use App\Models\Consulta;

class ConsultasControllerTest extends TestCase {

    public function testCreateConsulta() {
        // Arrange
        $controller = new ConsultasController();

        // Act
        $consulta = $controller->create(1, 2, '2026-01-01');

        // Assert
        $this->assertNotNull($consulta->id);
        $this->assertEquals(1, $consulta->pacienteId);
        $this->assertEquals(2, $consulta->profissionalId);
    }

    public function testGetAllConsultas() {
        $controller = new ConsultasController();

        $controller->create(1, 2, '2026-01-01');

        $consultas = $controller->getAll();

        $this->assertCount(1, $consultas);
    }
}