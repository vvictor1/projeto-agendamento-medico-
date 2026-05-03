class Notificacao {
    constructor(mensagem, destinatario) {
        this.mensagem = mensagem;
        this.destinatario = destinatario;
        this.enviadoEm = new Date();
    }
}

module.exports = Notificacao;