<!DOCTYPE html>
<html">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <h1>Tabla de Multiplicar</h1>
    
    <form method="post" action="">
    <input type="text" id="numeros" name="num_mult" />
    
    <button type="submit" name="crear">Crear tabla de multiplicar</button>

</form>
<br></br>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['num_mult']) && is_numeric($_POST['num_mult'])) {
        $num = intval($_POST['num_mult']);
        echo "<strong>Tabla del " . $num . "</strong>";
        echo "<p> </p>";
        if ($num >= 1 && $num <= 10) {
            echo "<table border='1'>";
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<td>$num x $i</td>";
                echo "<td>" . ($num * $i) . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    }
?>



</body>
</html>
