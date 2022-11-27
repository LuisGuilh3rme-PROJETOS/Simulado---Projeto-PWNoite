const perguntas = document.querySelectorAll(".questao");
const altErradas = document.querySelectorAll("#errada").length;
const altCorretas = perguntas.length - altErradas;

document.querySelector("#nota").innerHTML += `${altCorretas}/${perguntas.length}`;
document.querySelector("#percentual").innerHTML += `${altCorretas/perguntas.length * 100}%`;

perguntas.forEach((pergunta) => {
    let altEscolhida;
    (pergunta.querySelector("#errada")) ? altEscolhida = pergunta.querySelector("#errada") : altEscolhida = pergunta.querySelector("#certa");
    const p = document.createElement("p");
    p.innerHTML = "Alternativa Escolhida";
    p.style = "font-weight: bold;"
    altEscolhida.appendChild(p);
})