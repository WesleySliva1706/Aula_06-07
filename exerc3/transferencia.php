<html>
<head>
    <meta charset="utf-8">
    <title>Exerc 3 - POO</title>
</head>
<body>
    <!-- Sacar Dinheiro Dinheiro -->
    <?php setcookie('controlt', 1, time()+60*60*24); ?>
    <form class="" action= "exerc3_WesleySilva.php" method="post">
        <input type="number" min="0" step="any" name="t" placeholder="Transferir:">
        <input type="text" name="nomet" placeholder="Para:">
        <input type="number" min="1000" max="9999" name="nt" placeholder="Número">
        <input type="number" min="10000" max="99999" name="nt1" placeholder="da">
        <input type="number" min="0" max="9" name="nt2" placeholder="Conta:">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>