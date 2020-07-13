<html>
<head>
    <meta charset="utf-8">
    <title>Exerc 3 - POO</title>
</head>
<body>
    <!-- Criar uma nova conta -->
    <?php
    //Número da Conta
    setcookie('n', rand(1000, 9999), time()+60*60*24);
    setcookie('n1', rand(10000, 99999), time()+60*60*24);
    setcookie('n2', rand(0, 9), time()+60*60*24);
    setcookie('nome', "", time()+60*60*24);
    setcookie('dinheiro', 0, time()+60*60*24);
    setcookie('dcc', date("d/m/Y"));
    date_default_timezone_set("Brazil/East");
    setcookie('hcc', date('H:i:s'));
    ?>
    <form class="" action="exerc3_WesleySilva.php" method="post">
        <input type="text" name="nome" placeholder="Nome:">
        <input type="number" min="200" step="any" name="di" placeholder="Depósito Inicial:">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>