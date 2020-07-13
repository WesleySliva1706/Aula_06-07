<html>
<head>
    <meta charset="utf-8">
    <title>Exerc 3 - POO</title>
</head>
<body>
    <!--Escreva uma (ou mais) classe(s) para calcular o saldo de uma conta
        corrente que pertence a um correntista. Considere:
            a. Toda conta que se abre deve ter pelo menos R$ 200,00.
            b. O sistema deverá permitir fazer saques, depósitos e transferências.
            c. O saldo nunca pode ser negativo.
            d. A conta corrente deve incluir a data de abertura da conta. -->

    <p><h3>Banco</h3><hr>

    <?php

    require_once 'deposito2.php';
    require_once 'saque2.php';
    require_once 'transferencia2.php';

    //Instanciando Objetos
    $d = new Deposito2();
    $s = new Saque2();
    $t = new Transferencia2();

    if($_COOKIE['nome']==""){
        setcookie('nome', $_POST['nome'], time()+60*60*24);
        setcookie('dinheiro', $_POST['di'], time()+60*60*24);
        setcookie('controld', 0, time()+60*60*24);
        setcookie('controls', 0, time()+60*60*24);
        setcookie('controlt', 0, time()+60*60*24);
        setcookie('ud', 0, time()+60*60*24);
        setcookie('us', 0, time()+60*60*24);
        setcookie('ut', 0, time()+60*60*24);
        setcookie('nomet', " ", time()+60*60*24);
        setcookie('nt', 0, time()+60*60*24);
        setcookie('nt1', 0, time()+60*60*24);
        setcookie('nt2', 0, time()+60*60*24);
        header("Location: exerc3_WesleySilva.php");
    }
    else if($_COOKIE['nome']!=""){
    echo 'Seja Bem Vindo '.$_COOKIE['nome'].', seu Número da Conta é: '.$_COOKIE['n'].'-'.$_COOKIE['n1'].'-'.$_COOKIE['n2'].'.';
    }

    if($_COOKIE['controld']==1){
        $d->sets($_COOKIE['dinheiro'], $_POST['d']);
        setcookie('controld', 0, time()+60*60*24);
        header("Location: exerc3_WesleySilva.php");
    }

    if($_COOKIE['controls']==1){
        if($_POST['s']<=$_COOKIE['dinheiro']){
            $s->sets($_COOKIE['dinheiro'], $_POST['s']);
            setcookie('controls', 0, time()+60*60*24);
            header("Location: exerc3_WesleySilva.php");
        }

        else{
        echo '<br>Você não possui em sua conta R$ '.$_POST['s'].', então o saque não foi liberado. Seu saldo atual é de: R$'.$_COOKIE['dinheiro'].'.<br>';
        }
    }

    if($_COOKIE['controlt']==1){
        if($_POST['t']<=$_COOKIE['dinheiro']){
            $t->sets($_COOKIE['dinheiro'], $_POST['t'], $_POST['nomet'], $_POST['nt'], $_POST['nt1'], $_POST['nt2']);
            setcookie('controlt', 0, time()+60*60*24);
            header("Location: exerc3_WesleySilva.php");
        }

        else{
        echo '<br>Você não possui em sua conta R$ '.$_POST['t'].', então o transferência não foi liberada. Seu saldo atual é de: R$'.$_COOKIE['dinheiro'].'.<br>';
        }
    }
    ?>

    <p><h3>Clique no botão correspondente a função que você deseja</h3><br>
    <form class="" action="getConta.php" method="post">
        <input type="submit" value="Ver Conta">
    </form>

    <form class="" action="deposito.php" method="post">
        <input type="submit" value="Depositar">
    </form>

    <form class="" action="saque.php" method="post">
        <input type="submit" value="Sacar">
    </form>

    <form class="" action="transferencia.php" method="post">
        <input type="submit" value="Transferência">
    </form>
</body>
</html>