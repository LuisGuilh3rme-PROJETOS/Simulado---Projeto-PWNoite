const formCriar = document.querySelector("#formCriar");
const inputs = formCriar.querySelectorAll(".input");
const btnCriar = document.querySelector("#btnCriar");

btnCriar.addEventListener("click", e => {
    let errors = '';
    const textArea = document.querySelector("#perguntaInput");
    const selected = document.querySelector('input[name="correta"]:checked');

    if (!textArea.value) errors += "Preencha a pergunta" + "\n";

    inputs.forEach(input => {
        if (!input.value) {
            errors += "Preencha o espaço " + input.name + "\n";
        }
    });

    if (!selected) errors += "Marque a caixa de seleção";

    if (errors.length > 0) {
        e.preventDefault();
        alert(errors);
    }
})