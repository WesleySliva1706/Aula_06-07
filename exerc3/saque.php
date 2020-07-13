<html>
<head>
    <meta charset="utf-8">
    <title>Exerc 3 - POO</title>
</head>
<body>
    <!-- Sacar Dinheiro Dinheiro -->
    <?php setcookie('controls', 1, time()+60*60*24); ?>
    <form class="" action= "exerc3_WesleySilva.php" method="post">
        <input type="number" min="0" step="any" name="s" placeholder="Sacar:">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>