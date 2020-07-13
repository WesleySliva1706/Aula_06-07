<?php
    class Transferencia2{
    private $a; //Variavel para Armazenar Cookie
    private $b; //Variavel para Para Armazenar ultimo Tranferência
    private $c; //Variavel para Realizar as Contas

    public function Transferencia2($z = 0){
        $this->a = $z;
        $this->b = $z;
        $this->c = $z;
    }
    public function sets($x, $y, $not, $z1, $z2, $z3){
        $this->a = $x;
        $this->b = $y;
        $this->c = $this->a-$this->b;
        setcookie('dinheiro', $this->c, time()+60*60*24);
        setcookie('controlt', 0, time()+60*60*24);
        setcookie('ut', $this->b, time()+60*60*24);
        setcookie('nomet', $not, time()+60*60*24);
        setcookie('nt', $z1, time()+60*60*24);
        setcookie('nt1', $z2, time()+60*60*24);
        setcookie('nt2', $z3, time()+60*60*24);    
    }
}