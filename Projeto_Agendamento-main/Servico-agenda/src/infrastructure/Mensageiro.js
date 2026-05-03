function enviarMensagem(evento) {
    console.log(`[INFRASTRUCTURE] Conectando ao RabbitMQ...`);
    console.log(`[INFRASTRUCTURE] Enviando evento: ${evento}`);
    console.log(`[INFRASTRUCTURE] Mensagem enviada com sucesso!`);
}

module.exports = enviarMensagem;