<?php
$numero = $_POST['numero'];
if ($numero > 0) {
    echo "<p>Valor Positivo</p>";
} elseif ($numero < 0) {
    echo "<p>Valor Negativo</p>";
} else {
    echo "<p>Igual a Zero</p>";
}
?>

