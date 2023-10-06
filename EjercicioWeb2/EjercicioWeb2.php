<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
   <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
   <link rel="stylesheet"  href="style.css">
    <title>Divisibilidad</title>
</head>
<body>
<div class= container>
    <h2> Divisibilidad</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="numero1">Número 1:</label>
        <br>
        <input  type="number" name="numero1" required>
        <br>
        <label for="numero2">Número 2:</label>
        <br>
        <input type="number" name="numero2" required>
        <br>
        <br>
        <input class="btn btn-success" type="submit" value=" Divisibilidad">
    </form>
    <br>
    <?php
    // Función divisibilidad y resultados
    function verificarDivisibilidad($num1, $num2) {
        $res = $num1 / $num2;
        $residuo = $num1 % $num2;

        echo "Resultado de la división: $res<br>";
        echo "Residuo de la división: $residuo<br>";

        if ($residuo == 0) {
            echo "$num1 es divisible entre $num2.";
        } else {
            echo "$num1 no es divisible entre $num2.";
        }
    }
    
    // Datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Capturar los números del formulario
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];

        // Revisar datos del formulario 
        if (!empty($numero1) && !empty($numero2)) {
            if ($numero2 != 0) {
                verificarDivisibilidad($numero1, $numero2);
            } else {
                echo "El segundo número debe ser diferente de cero.";
            }
        } else {
            echo "Ingresa los numeros a calcular";
        }
    }
    ?>
</div>
</body>
</html>
