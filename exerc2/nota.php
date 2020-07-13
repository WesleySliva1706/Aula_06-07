<?PHP

    class Nota{
        private $m1; //Média do primeiro aluno
        private $m2; //Média do segundo aluno

    //Metodo Contrutor
    public function Nota($b = "", $a = ""){
        $this->m1 = $b;
        $this->m2 = $a;
    }

    //Set's
    public function setM1(){
        if((($_POST['na11']+$_POST['na12']+$_POST['na13']+$_POST['na14'])/4)>=9 && (($_POST['na11']+$_POST['na12']+$_POST['na13']+$_POST['na14'])/4)<=10){
            $this->m1 ="MB";
        }

        else if((($_POST['na11']+$_POST['na12']+$_POST['na13']+$_POST['na14'])/4)>=7 && (($_POST['na11']+$_POST['na12']+$_POST['na13']+$_POST['na14'])/4)<9){
            $this->m1 ="B";
        }

        else if((($_POST['na11']+$_POST['na12']+$_POST['na13']+$_POST['na14'])/4)>=5 && (($_POST['na11']+$_POST['na12']+$_POST['na13']+$_POST['na14'])/4)<7){
            $this->m1 ="R";
        }

        else{
            $this->m1 ="I";
        }
    }

    public function setM2(){
        if((($_POST['na21']+$_POST['na22']+$_POST['na23']+$_POST['na24'])/4)>=9 && (($_POST['na21']+$_POST['na22']+$_POST['na23']+$_POST['na24'])/4)<=10){
            $this->m2 ="MB";
        }

        else if((($_POST['na21']+$_POST['na22']+$_POST['na23']+$_POST['na24'])/4)>=7 && (($_POST['na21']+$_POST['na22']+$_POST['na23']+$_POST['na24'])/4)<9){
            $this->m2 ="B";
        }

        else if((($_POST['na21']+$_POST['na22']+$_POST['na23']+$_POST['na24'])/4)>=5 && (($_POST['na21']+$_POST['na22']+$_POST['na23']+$_POST['na24'])/4)<7){
            $this->m2 ="R";
        }

        else{
            $this->m2 ="I";
        }
    }

    //Get's
    public function getM1(){
        return $this->m1;
    }

    public function getM2(){
        return $this->m2;
    }

    //Metodo de Resposta
    public function imprime(){
        echo 'O aluno(a) '.$_POST['aluno1'].', com suas notas '.$_POST['na11'].', '.$_POST['na12'].', '.$_POST['na13'].' e '.$_POST['na14'].', possui uma mensal final de: '.$this->getM1().'. <br>';
        echo 'O aluno(a) '.$_POST['aluno2'].', com suas notas '.$_POST['na21'].', '.$_POST['na22'].', '.$_POST['na23'].' e '.$_POST['na24'].', possui uma mensal final de: '.$this->getM2().'.';
    }
}