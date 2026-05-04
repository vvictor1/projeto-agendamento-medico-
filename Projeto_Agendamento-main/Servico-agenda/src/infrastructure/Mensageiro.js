const amqp = require("amqplib");

async function enviarMensagem(evento) {
    try {
        console.log('[INFRASTRUCTURE] Conectando ao RabbitMQ...');

        const conexao = await amqp.connect("amqp://localhost");
        const canal = await conexao.createChannel();

        const fila = "fila_notificacoes";

        await canal.assertQueue(fila, { durable: true });

        console.log(`[INFRASTRUCTURE] Enviando evento: ${evento}`);

        canal.sendToQueue(fila, Buffer.from(evento), {
            persistent: true
        });

        console.log('[INFRASTRUCTURE] Mensagem enviada com sucesso!');

        setTimeout(() => {
            conexao.close();
        }, 500);

    } catch (erro) {
        console.error("Erro ao enviar mensagem:", erro);
    }
}

module.exports = enviarMensagem;