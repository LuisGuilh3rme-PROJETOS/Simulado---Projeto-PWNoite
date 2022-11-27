function h (el) {
    const a = el.querySelector("input");
    a.checked = true;
}

const url = new URLSearchParams(window.location.search);

addEventListener("submit", e => {
    const inputs = document.querySelectorAll("input:checked");
    if (inputs.length == 0) {
        e.preventDefault();
        avisarErro("Nenhuma questão foi respondida");
        return;
    }
    if (url.has("ignorar")) return;

    const quantidade = document.querySelectorAll(".pergunta").length;
    if (inputs.length != quantidade) {
        e.preventDefault();
        avisarErro("Responda todas as questões");
    }
})

function avisarErro(erro) {
    const span = document.querySelector("#erro");
    span.style = "color: red";
    span.innerHTML = erro;
}