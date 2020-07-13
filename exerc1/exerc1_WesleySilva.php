<?php
/*
Considere o diagrama de classes a seguir:

|---------------------------|
|        Triangulo          |
|---------------------------|
|- base: float              |
|-altura: float             |
|---------------------------|
|Triangulo(float b, float a)|
|getBase(): float           |
|getAltura(): float        |
|setBase(float b): void     |
|setAltura(float a): void   |
|area(): float              |
|imprime():void             |
|---------------------------|

a. Desenvolva o código PHP que o representa;
b. Crie uma página que peça ao usuário para digitar a base e altura
de um triângulo (utilize os formulários do HTML). Os valores
digitados devem ser utilizados pelo construtor na instanciação do
objeto.
c. Utilize o método imprime() para exibir os dados do objeto e mostre
a área ((base*altura)/2) do triângulo, utilizando o método area():
OBS: Lembre de utilizar os métodos get e set adequados para inserir e
obter valores dos atributos da classe.
*/

require_once 'triangulo.php';

    //Instanciando Objetos
    $t = new Triangulo();
    
    //Chamada de Metodos
    //Set's
    $t->setBase($_POST['base']);
    $t->setAltura($_POST['altura']);

    //Metodo de Reposta
    $t->imprime();

    //Metodo para calcular a área
    $t->area();