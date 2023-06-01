<!DOCTYPE html>
<html>
<head>
    <title>Médias Bimestrais</title>
</head>
<body>
    <h1>Calculadora de Médias Bimestrais</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $nota3 = $_POST["nota3"];
        $nota4 = $_POST["nota4"];

        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

        echo "<p>Nota 1: $nota1</p>";
        echo "<p>Nota 2: $nota2</p>";
        echo "<p>Nota 3: $nota3</p>";
        echo "<p>Nota 4: $nota4</p>";
        echo "<p>Média: $media</p>";

        if ($media >= 7.5) {
            echo "<p>Estudante aprovado!</p>";
        } elseif ($media >= 3 && $media < 7.5) {
            echo "<p>Estudante em recuperação.</p>";
        } else {
            echo "<p>Estudante reprovado.</p>";
        }
    }
    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="nota1">Nota 1:</label>
        <input type="number" name="nota1" step="0.01" required><br>

        <label for="nota2">Nota 2:</label>
        <input type="number" name="nota2" step="0.01" required><br>

        <label for="nota3">Nota 3:</label>
        <input type="number" name="nota3" step="0.01" required><br>

        <label for="nota4">Nota 4:</label>
        <input type="number" name="nota4" step="0.01" required><br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>