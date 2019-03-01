<?php

         print "Digite a primeira nota: ";
    $n1 = (int)fgets (STDIN);
    
         print "Digite a segunda nota: ";
    $n2 = (int)fgets (STDIN);
    
        print "Digite a terceira nota: ";
    $n3 = (int)fgets (STDIN);
    
        print "Digite a quarta nota: ";
    $n4 = (int)fgets (STDIN);

    $soma = $n1 + $n2 + $n3 + $n4;
    $media = $soma/4;

        print "A soma total das suas notas é: $soma\n";
        print "A média total das suas notas é: $media\n\n\n";



    

        print "Escreva um número: ";
    $v1 = (int)fgets (STDIN);

        print "Escreva outro número: ";
    $v2 = (int)fgets (STDIN);

    $vn = $v2;
    $v2 = $v1;

        print "Agora o primeiro número é: $vn \n";
        print "Agora o segundo número é: $v2 ";

