<?php
/*
Crie um aplicativo Web para calcular a média de 4 notas de 2 alunos.
Utilize a POO para isso, criando as classes, atributos e métodos
adequados.
a. Um dos métodos deve validar as notas e exibi-las como menções:
    i. MB (para médias 9 e 10);
    ii. B (7 e 8);
    iii. R (5 e 6);
    iv. I (menos de 5).
*/

require_once 'nota.php';

    //Instanciando Objetos
    $n = new Nota();
    
    //Chamada de Metodos
    //Set's
    $n->setM1();
    $n->setM2();

    //Metodo de Reposta
    $n->imprime();