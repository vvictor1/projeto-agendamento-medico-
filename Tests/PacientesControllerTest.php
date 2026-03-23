<?php

use PHPUnit\Framework\TestCase;
use App\Controllers\PacientesController;
use App\Models\Paciente;

class PacientesControllerTest extends TestCase {

    public function testCreatePaciente() {
        // Arrange
        $controller = new PacientesController();

        // Act
        $paciente = $controller->create('Bruno', 'Bruno232@gmail.com', '8399232441');

        // Assert
        $this->assertNotNull($paciente->id);
        $this->assertEquals('Bruno', $paciente->nome);
        $this->assertEquals('Bruno232@gmail.com', $paciente->email);
        $this->assertEquals('8399232441', $paciente->telefone);
    }

    public function testGetAllPacientes() {
        // Arrange
        $controller = new PacientesController();

        // Act
        $controller->create('Ana', 'ana4212@gmail.com', '8399241245');
        $pacientes = $controller->getAll();

        // Assert
        $this->assertCount(1, $pacientes);
    }
}