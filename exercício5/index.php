<html>
<head>
    <title>Exercício 5</title>
</head>
<body>
    Jogo Jokenpô.
    <form method="post" action="funcao5.php">
        <label for="nome">Seu nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        <label for="jogada">Escolha sua jogada:</label>
        <select id="jogada" name="jogada" required>
            <option value="pedra">Pedra</option>
            <option value="papel">Papel</option>
            <option value="tesoura">Tesoura</option>
        </select><br><br>
        <input type="submit" value="Jogar!">
    </form>
</body>
</html>
    
