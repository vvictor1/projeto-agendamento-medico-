function enviarAviso(mensagem) {
    console.log("______________________________________");
    console.log("NOTIFICADOR: Eu ouvi um evento!");
    console.log("NOTIFICADOR: Enviando mensagem: " + mensagem);
    console.log("NOTIFICADOR: Aviso enviado com sucesso!");
    console.log("______________________________________");
}

module.exports = enviarAviso;