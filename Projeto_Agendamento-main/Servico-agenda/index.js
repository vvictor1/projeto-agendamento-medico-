const enviarMensagem = require("./src/infrastructure/Mensageiro");

console.log("=== SISTEMA DE AGENDAMENTO INICIADO ===");
console.log("Status: O serviço de agenda está rodando e pronto.");
console.log("Ação: Simulando o envio de uma mensagem para o RabbitMQ...");

enviarMensagem("Consulta agendada!");