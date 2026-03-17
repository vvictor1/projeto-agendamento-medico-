# Plataforma de Agendamento Médico - PHP

## Atividade: Models e Controllers + Bounded Contexts

### 1. Contexto de Usuários (User Context)

*Model:* Paciente, Profissional  
*Controllers:* PacientesController, ProfissionaisController  
*Responsabilidade:*  
Gerenciar cadastro, autenticação e dados dos usuários (pacientes e médicos).

---

### 2. Contexto de Agendamentos (Appointment Context)

*Model:* Consulta  
*Controller:* ConsultasController  
*Responsabilidade:*  
Criar, visualizar, remarcar e cancelar consultas médicas, além de gerenciar disponibilidade de horários.

---

### 3. Contexto de Médicos e Especialidades (Doctor Context)

*Model:* Profissional, Especialidade  
*Controller:* ProfissionaisController  
*Responsabilidade:*  
Gerenciar médicos e suas especialidades, incluindo registro profissional (CRM).

---

### 4. Contexto de Pagamentos (Payment Context)

*Model:* Pagamento  
*Controller:* (futuro PaymentController)  
*Responsabilidade:*  
Gerenciar pagamentos de consultas e registrar transações financeiras.

---

### 5. Contexto de Notificações (Notification Context)

*Model:* Notificacao  
*Controller:* (futuro NotificationsController)  
*Responsabilidade:*  
Enviar lembretes e notificações aos usuários sobre consultas e avisos importantes.

---

## Consideração Final

A divisão em Models e Controllers dentro de cada Bounded Context organiza o sistema, separando os dados das regras de negócio, facilitando a futura implementação de APIs e microsserviços