<?php $titulo = "Simulado"; $estilo = "../css/simulado.css"; include "../cabecalho.php" ?>
<?php
    include "../conexao.php";
    $query = "select * from questoes where CHAR_LENGTH(pergunta)>1 order by rand() limit ".$_GET["quantidade"];
    $resultado = mysqli_query($conexao, $query);
?>
<div id="simulado">
    <h1 style="margin-bottom: 1rem">Simulado</h1>
    <a href="./index.php">Voltar</a>
    <form action="./gabarito.php" method="post">
        <?php
        $quantidade = 0;
            while ($linha = mysqli_fetch_array($resultado)) {
                $quantidade++;
        ?>
        <div class="questao">
            <h2>Pergunta N° <?php echo $quantidade ?></h2>
            <p id="#pergunta"><?php echo $linha["pergunta"]; ?></p>
            <div class="alternativa" onClick="h(this)">
                <input type="radio" class="radio" name=<?php echo $linha["id"] ?> value='A' /> <?php echo $linha["a"]; ?>
            </div>
            <div class="alternativa" onClick="h(this)">
                <input type="radio" class="radio" name=<?php echo $linha["id"] ?> value='B' /> <?php echo $linha["b"]; ?>
            </div>
            <div class="alternativa" onClick="h(this)">
                <input type="radio" class="radio" name=<?php echo $linha["id"] ?> value='C' /> <?php echo $linha["c"]; ?>
            </div>
            <div class="alternativa" onClick="h(this)">
                <input type="radio" class="radio" name=<?php echo $linha["id"] ?> value='D' /> <?php echo $linha["d"]; ?>
            </div>
            <div class="alternativa" onClick="h(this)">
                <input type="radio" class="radio" name=<?php echo $linha["id"] ?> value='E' /> <?php echo $linha["e"]; ?>
            </div>
        </div>
        <?php
            }
        ?>
        <div id="btns">
            <span id="erro"></span id="erro">
            <button type="reset" id="btnResetar">Resetar</button>
            <button type="submit" id="btnEnviar">Enviar</button>
        </div>
    </form>
</div>
<script src="../js/simulado.js"></script>
<?php include "../rodape.php" ?>