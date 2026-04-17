const form = document.getElementById("cadastroForm");
    const resultado = document.getElementById("resultado");

    form.addEventListener("submit", function(event) {
      event.preventDefault();

      const nome = document.getElementById("nome").value;
      const email = document.getElementById("email").value;
      const telefone = document.getElementById("telefone").value;

      resultado.textContent =
        "Dados recebidos: Nome = " + nome +
        ", E-mail = " + email +
        ", Telefone = " + telefone;
    });