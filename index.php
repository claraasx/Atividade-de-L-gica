<?php

// 01 - um programa que leia 5 valores, some os 4 primeiros e divida o resultado pelo 5 valor.

    echo PHP_EOL;
    echo "________________________________________________________________________________________________" .  PHP_EOL;
    echo PHP_EOL;
    echo "01 - Faça um programa que leia 5 valores, some os 4 primeiros e divida o resultado pelo 5 valor." .  PHP_EOL;
    echo "________________________________________________________________________________________________" .  PHP_EOL;
    echo PHP_EOL;
    echo PHP_EOL;



    $valores = array(25, 14, 18, 10, 12);

    $soma = $valores[0] + $valores[1] + $valores[2] + $valores[3];


    $a = $valores[4];


    $resultado = $soma / $a;

    echo "Valor 1: 25 " . PHP_EOL;
    echo "Valor 2: 14 " . PHP_EOL;
    echo "Valor 3: 18 " . PHP_EOL;
    echo "Valor 4: 10 " . PHP_EOL;
    echo "Valor 5: 12 " . PHP_EOL;
    echo PHP_EOL;

    echo " O resultado da soma dos 4 primeiros valores, 
dividido pelo último valor é: " . $resultado . PHP_EOL;
    echo PHP_EOL;
    echo PHP_EOL;
    echo PHP_EOL;


// 02 - um programa que calcule a media aritmética simples entre 4 notas.
    echo "___________________________________________________________________________" .  PHP_EOL;
    echo PHP_EOL;
    echo "02 - Faça um programa que calcule a media aritmética simples entre 4 notas." .  PHP_EOL;
    echo "___________________________________________________________________________" .  PHP_EOL;
    echo PHP_EOL;
    echo PHP_EOL;


    $nota1 = 8.5;
    $nota2 = 8.9;
    $nota3 = 6.0;
    $nota4 = 9.0;

    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

    echo "Nota 1: 8.5" . PHP_EOL;
    echo "Nota 2: 8.9" . PHP_EOL;
    echo "Nota 3: 6.0" . PHP_EOL;
    echo "Nota 4: 9.0" . PHP_EOL;
    echo PHP_EOL;


    echo "A média das quatro notas inseridas é: " . $media . PHP_EOL;
    echo PHP_EOL;
    echo PHP_EOL;
    echo PHP_EOL;


// 03 - um programa que leia um nome e dois valores, apos a leitura dos valores, exiba o nome da pessoa e a divisão entre os dois valores.
    echo "____________________________________________________________________________________________________________________________________________" .  PHP_EOL;
    echo PHP_EOL;
    echo "03 - Faça um programa que leia um nome e dois valores, após a leitura dos valores, exiba o nome da pessoa e a divisão entre os dois valores." .  PHP_EOL;
    echo "____________________________________________________________________________________________________________________________________________" .  PHP_EOL;
    echo PHP_EOL;
    echo PHP_EOL;


    $nome = "Ana Clara";
    $valor1 = 20;
    $valor2 = 10;


    $resultado = $valor1 / $valor2;

    echo " " . $nome . PHP_EOL;
    echo PHP_EOL;
    echo " O resultado da divisão dos dois números que você inseriu foi: " . $resultado . PHP_EOL;
    echo PHP_EOL;
    echo PHP_EOL;
    echo PHP_EOL;



// 04 - faca um programa que leia dois números inteiros, realize a soma desses números e exiba o resultado final.
    echo "______________________________________________________________________________________________________________" .  PHP_EOL;
    echo PHP_EOL;
    echo "04 - Faca um programa que leia dois números inteiros, realize a soma desses números e exiba o resultado final." .  PHP_EOL;
    echo "______________________________________________________________________________________________________________" .  PHP_EOL;
    echo PHP_EOL;
    echo PHP_EOL;


    $num1 = 65;
    $num2 = 21;


    $soma = $num1 + $num2;

    echo "Número 1: 65" . PHP_EOL;
    echo "Número 2: 21" . PHP_EOL;
    echo PHP_EOL;

    echo "O resultado da soma desses dois números é: " . $soma . PHP_EOL;
    echo PHP_EOL;

?>

