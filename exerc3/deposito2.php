<?php
    class Deposito2{
    private $a; //Variavel para Armazenar Cookie
    private $b; //Variavel para Para Armazenar ultimo Depósito
    private $c; //Variavel para Realizar as Contas

    public function Deposito2($z = 0){
        $this->a = $z;
        $this->b = $z;
        $this->c = $z;
    }
    public function sets($x, $y){
        $this->a = $x;
        $this->b = $y;
        $this->c = $this->a+$this->b;
        setcookie('dinheiro', $this->c, time()+60*60*24);
        setcookie('ud', $this->b, time()+60*60*24);    
    }
}