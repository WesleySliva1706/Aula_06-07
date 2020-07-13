<?PHP

    class Triangulo{
        private $base;
        private $altura;

    //Metodo Contrutor
    public function Triangulo($b = 0, $a = 0){
        $this->base = $b;
        $this->altura = $a;
    }

    //Set's
    public function setBase($b){
        $this->base = $b;
    }

    public function setAltura($a){
        $this->altura = $a;
    }

    //Get's
    public function getBase(){
        return $this->base;
    }

    public function getAltura(){
        return $this->altura;
    }

    //Metodo para calcular a área
    public function area(){
        echo 'Área: '.(($this->getBase()*$this->getAltura())/2).'.';
    }


    //Metodo de Resposta
    public function imprime(){
        echo 'Dados do triângulo:<br>Base: '.$this->getBase().'.<br>Altura: '.$this->getAltura().'.<br>';
    }
}