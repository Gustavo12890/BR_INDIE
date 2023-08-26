function validarEmail(email) {
    const emailRejeitado = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRejeitado.test(email);
}

function validarNascimento(nascimento) {
    const dataAtual = new Date();
    const dataSelecionada = new Date(nascimento);
    return dataSelecionada < dataAtual;
}

document.getElementById("btnCadastrar").addEventListener("click", function(event) {
    event.preventDefault();

    const email = document.getElementById("email").value;
    const password = document.getElementById("senha").value;
    const confirmSenha = document.getElementById("confirmSenha").value;
    const nascimento = document.getElementById("nascimento").value;
    const tipoContas = document.querySelectorAll('input[name="tipoConta"]:checked');

    let isValid = true;

    if (!validarEmail(email)) {
        alert("Email inválido");
        isValid = false;
    }

    if (password !== confirmSenha) {
        alert("As senhas não coincidem");
        isValid = false;
    }

    if (!validarNascimento(nascimento)) {
        alert("Data de nascimento inválida");
        isValid = false;
    }

    if (tipoContas.length === 0) {
        alert("Selecione pelo menos um tipo de conta");
        isValid = false;
    }

    if (isValid) {
        document.getElementById("cadastroForm").submit();
        document.getElementById("cadastroForm2").submit();
    }
});
