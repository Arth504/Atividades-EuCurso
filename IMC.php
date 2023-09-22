<!DOCTYPE html>
<html lang="pt">

    <head>
        <meta charset="utf-8">
        <title>Calculadora IMC</title>
    </head>
    
    <body>
        
        <p>Por favor, insira sua altura e seu peso para fazermos o cálculo</p>

        <form>
            Altura: <input name="altura">
            <br/>
            Peso: <input name="peso">
            <br/>
            <button>Enviar</button>
        </form>

        <?php
            if (isset($_GET["altura"]) && isset($_GET["peso"])) {

                $altura = $_GET["altura"];
                $peso = $_GET["peso"];
                $soma = $peso / ($altura * $altura);

                if ($soma <= 18.5) {
                echo "<p>Você está abaixo do peso!</p>";
                }
                elseif ($soma <= 24.9) {
                 echo "<p>Você está no peso ideal!</p>";
                }
                elseif ($soma <= 30) {
                echo "<p>Você está levemente acima do peso!</p>";
                }
                elseif ($soma <= 35) {
                echo "<p>Você está com grau de obesidade I!</p>";
                }
                elseif ($soma <= 40) {
                echo "<p>Você está com grau de obesidade II!</p>";
                }
                else {echo "<p>Você está com grau de obesidade III!</p>";
                }
                echo "<p>A sua classificação é: $soma</p>";
            }
        ?>

    </body>

</html>