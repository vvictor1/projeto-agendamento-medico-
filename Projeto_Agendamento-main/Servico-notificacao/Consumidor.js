const amqp = require("amqplib");

async function consumirMensagens() {
    try {
        console.log("[NOTIFICADOR] Conectando ao RabbitMQ...");

        // conexão com o servidor RabbitMQ
        const conexao = await amqp.connect("amqp://localhost");

        const canal = await conexao.createChannel();

        const fila = "fila_notificacoes";

        // garante que a fila existe
        await canal.assertQueue(fila, { durable: true });

        console.log(`[NOTIFICADOR] Aguardando mensagens na fila: ${fila}`);

        // escuta as mensagens
        canal.consume(fila, (mensagem) => {
            if (mensagem !== null) {
                const conteudo = mensagem.content.toString();

                console.log("______________________________________");
                console.log("NOTIFICADOR: Eu ouvi um evento!");
                console.log("NOTIFICADOR: Mensagem recebida:", conteudo);
                console.log("NOTIFICADOR: Processando...");
                console.log("NOTIFICADOR: Aviso enviado com sucesso!");
                console.log("______________________________________");

                // confirma que a mensagem foi processada
                canal.ack(mensagem);
            }
        });

    } catch (erro) {
        console.error("Erro no consumidor:", erro);
    }
}

consumirMensagens();