<html>
<head>
    <meta charset="utf-8">
    <title>Exerc 3 - POO</title>
</head>
<body>
    <!-- Criar uma nova conta -->
    <?php
    echo 'Nome do Proprietário: '.$_COOKIE['nome'].'.<br>';
    echo 'Número da Conta: '.$_COOKIE['n'].'-'.$_COOKIE['n1'].'-'.$_COOKIE['n2'].'.<br>';
    echo 'Data de Criação da Conta: '.$_COOKIE['dcc'].', as '.$_COOKIE['hcc'].'.<br>';
    echo 'Saldo: R$ '.$_COOKIE['dinheiro'].'.<br>';
    echo 'Último Depósito: R$ '.$_COOKIE['ud'].'.<br>';
    echo 'Último Saque: R$ '.$_COOKIE['us'].'.<br>';
    if($_COOKIE['nomet']!=" "){
        echo 'Última Transferência: R$ '.$_COOKIE['ut'].', para: '.$_COOKIE['nomet'].'. Número da conta: '.$_COOKIE['nt'].'-'.$_COOKIE['nt1'].'-'.$_COOKIE['nt2'].'.<br>';
    }
    else{
        echo "Não Houve Transferências Anteriormente. <hr>";
    }
    ?>
    <form class="" action="exerc3_WesleySilva.php" method="post">
        <input type="submit" value="Retornar">
    </form>
</body>
</html>