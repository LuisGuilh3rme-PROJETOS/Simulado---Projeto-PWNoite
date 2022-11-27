<?php $titulo = "Menu de opções"; $estilo = "../css/style.css"; include "../cabecalho.php" ?>
<?php
    include "../conexao.php";

    if (isset($_POST) && !empty($_POST)) {
        $pergunta = $_POST["pergunta"];
        $a = $_POST["A"];
        $b = $_POST["B"];
        $c = $_POST["C"];
        $d = $_POST["D"];
        $e = $_POST["E"];
        $correta = $_POST["correta"];
        
        $query = "insert into questoes (pergunta, a, b, c, d, e, correta) values ('$pergunta', '$a', '$b','$c', '$d', '$e', '$correta')";
        $resultado = mysqli_query($conexao, $query);
    }
?>
<div id="menu">
        <div id="criar">
            <h1>Crie sua própria questão</h1>
            <form action="#" method="post" id="formCriar">
                <label for="pergunta">PERGUNTA</label>
                <textarea name="pergunta" id="perguntaInput" placeholder="Insira sua pergunta..."></textarea>
                <div class="inputs">
                    <input type="radio" name="correta" value="A" />
                    <input type="text" class="input" name="A" />
                </div>
                <div class="inputs">
                    <input type="radio" name="correta" value="B" />
                    <input type="text" class="input" name="B" />
                </div>
                <div class="inputs">
                    <input type="radio" name="correta" value="C" />
                    <input type="text" class="input" name="C" />
                </div>
                <div class="inputs">
                    <input type="radio" name="correta" value="D" />
                    <input type="text" class="input" name="D" />
                </div>
                <div class="inputs">
                    <input type="radio" name="correta" value="E" />
                    <input type="text" class="input" name="E" />
                </div>
                <div id="btns">
                    <button type="reset" id="btnResetar">RESETAR</button>
                    <button type="submit" id="btnCriar">CRIAR</button>
                </div>
            </form>
        </div>
        <div id="simulado">
            <h1>Responda o simulado</h1>
            <h2>Opções</h2>
            <form action="./simulado.php" method="get" id="formResponder">
                <label for="quantidade">Quantidade de questões: </label>
                <select name="quantidade">
                    <option value="5">5</option>
                    <option value="10" selected>10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                </select>
                <div>
                    <input type="checkbox" name="ignorar">
                    <label for="ignorar">Ignorar Questões não respondidas</label>
                </div>
                <button type="submit" id="btnResponder">RESPONDER</button>
            </form>
        </div>
    </div>
<script src="../js/main.js"></script>
<?php include "../rodape.php" ?>