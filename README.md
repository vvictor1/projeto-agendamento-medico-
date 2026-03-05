# projeto-agendamento-medico-
Tema: Plataforma de agendamento médico.

Integrantes: Victor Edgar (RGM:45398917), Yasmin Carvalho (RGM:42853494), Juan Justino (RGM:45454418) e Pedro Lukas (RGM:45430331).



```src/

├── Scheduling.API/                  # Camada de API (Controllers)
│   ├── Controllers/
│   │   ├── PacientesController.cs
│   │   ├── ProfissionaisController.cs
│   │   └── ConsultasController.cs
│   ├── Program.cs
│   └── appsettings.json

├── Scheduling.Application/          # Casos de uso
│   ├── UseCases/
│   │   ├── CriarConsulta/
│   │   │   ├── CriarConsultaCommand.cs
│   │   │   └── CriarConsultaHandler.cs
│   │   ├── CancelarConsulta/
│   │   │   ├── CancelarConsultaCommand.cs
│   │   │   └── CancelarConsultaHandler.cs
│   │   └── ListarAgendaMedico/
│   │       ├── ListarAgendaQuery.cs
│   │       └── ListarAgendaHandler.cs
│   │
│   ├── Ports/                       # Interfaces
│   │   ├── IPacienteRepository.cs
│   │   ├── IProfissionalRepository.cs
│   │   └── IConsultaRepository.cs
│   │
│   └── Services/

├── Scheduling.Domain/               # Entidades e Value Objects
│   ├── Entities/
│   │   ├── Paciente.cs
│   │   ├── Profissional.cs
│   │   ├── Consulta.cs
│   │   └── Pagamento.cs
│   │
│   ├── ValueObjects/
│   │   ├── Endereco.cs
│   │   ├── Especialidade.cs
│   │   ├── HorarioConsulta.cs
│   │   └── Dinheiro.cs
│   │
│   └── Exceptions/
│       └── ConsultaNaoEncontradaException.cs

├── Scheduling.Infrastructure/       # Implementações
│   ├── Data/
│   │   ├── ConsultaRepository.cs
│   │   └── AppDbContext.cs
│   │
│   ├── Messaging/
│   └── ExternalServices/

└── Scheduling.Tests/
    ├── Application.Tests/
    ├── Domain.Tests/
    └── Infrastructure.Tests/```
