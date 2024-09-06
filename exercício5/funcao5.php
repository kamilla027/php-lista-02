<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $jogadaUsuario = $_POST['jogada'];
    $opcoes = ['pedra', 'papel', 'tesoura'];
    $jogadaComputador = $opcoes[array_rand($opcoes)];
    if ($jogadaUsuario === $jogadaComputador) {
        $resultado = "Empate!";
    } elseif (
        ($jogadaUsuario === 'pedra' && $jogadaComputador === 'tesoura') ||
        ($jogadaUsuario === 'papel' && $jogadaComputador === 'pedra') ||
        ($jogadaUsuario === 'tesoura' && $jogadaComputador === 'papel')
    ) {
        $resultado = "$nome, você ganhou!";
    } else {
        $resultado = "$nome, você perdeu.";
    }
    $imagens = [
        'pedra' => 'pedra.png',
        'papel' => 'papel.png',
        'tesoura' => 'tesoura.png'
    ];
    echo "<h2>Resultado do Jogo</h2>";
    echo "<p>$nome jogou: <img src='" . $imagens[$jogadaUsuario] . "' alt='$jogadaUsuario' style='width:100px;'></p>";
    echo "<p>Computador jogou: <img src='" . $imagens[$jogadaComputador] . "' alt='$jogadaComputador' style='width:100px;'></p>";
    echo "<h3>$resultado</h3>";
}
?>
