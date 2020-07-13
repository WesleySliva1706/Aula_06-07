<html>
<head>
    <meta charset="utf-8">
    <title>Exerc 3 - POO</title>
</head>
<body>
    <!-- Depositar Dinheiro -->
    <?php setcookie('controld', 1, time()+60*60*24); ?>
    <form class="" action= "exerc3_WesleySilva.php" method="post">
        <input type="number" min="0" step="any" name="d" placeholder="Depósito:">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>