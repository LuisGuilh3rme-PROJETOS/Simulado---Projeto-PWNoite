<?php $titulo = "Gabarito"; $estilo = "../css/gabarito.css"; include "../cabecalho.php" ?>
<?php
    include "../conexao.php";
    $array = array_keys($_POST);
?>
<div id="gabarito">
    <h1 style="margin-bottom: 1rem">Gabarito Simulado</h1>
    <a href="./index.php">Voltar</a>
    <div id="questoes">
        <h2 id="nota">Nota: </h2>
        <h2 id="percentual">Percentual de acerto: </h2>
    <?php
        for ($contagem = 0; $contagem < count($_POST); $contagem++) {
            $id = $array[$contagem];
            $query = "select * from questoes where id = $id";
            $resultado = mysqli_query($conexao, $query);

            $linha = mysqli_fetch_array($resultado);
        ?>
        <div class="questao">
            <p> <?php echo $linha["pergunta"]; ?> </p>
            <p><?php echo "Alternativa correta: ". $linha["correta"] ?><p>
            <div class="alternativa" id=<?php 
                if ($linha["correta"] == "A" || $linha["correta"] == "a") echo "certa";
                else if ($_POST["$id"] == "A") echo "errada"; 
            ?>>
                <?php echo "A) ".$linha["a"]; ?>
            </div>
            <div class="alternativa" id=<?php 
                if ($linha["correta"] == "B" || $linha["correta"] == "b") echo "certa";
                else if ($_POST["$id"] == "B") echo "errada"; 
            ?>>
                <?php echo "B) ". $linha["b"]; ?>
            </div>
            <div class="alternativa" id=<?php 
                if ($linha["correta"] == "C" || $linha["correta"] == "c") echo "certa";
                else if ($_POST["$id"] == "C") echo "errada"; 
            ?>>
                <?php echo "C) ". $linha["c"]; ?>
            </div>
            <div class="alternativa" id=<?php 
                if ($linha["correta"] == "D" || $linha["correta"] == "d") echo "certa";
                else if ($_POST["$id"] == "D") echo "errada"; 
            ?>>
                <?php echo "D) ". $linha["d"]; ?>
            </div>
            <div class="alternativa" id=<?php 
                if ($linha["correta"] == "E" || $linha["correta"] == "e") echo "certa";
                else if ($_POST["$id"] == "E") echo "errada"; 
            ?>>
                <?php echo "E) ". $linha["e"]; ?>
            </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<script src="../js/gabarito.js"></script>
<?php include "../rodape.php" ?>