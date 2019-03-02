<?php
    print "Você fuma a quanto tempo?\n";
        $anos = (int) fgets (STDIN);
    
    print "\nVocê fuma quantos cigarros por dia?\n";
        $por_dia = (int) fgets (STDIN);

        $novo_ano = $anos * 365;
        $ciga_fumados = $novo_ano * $por_dia;
        $tempo_perdido = $ciga_fumados * 10;
        $final = $tempo_perdido / 1440;

    print "\nO tempo em dias que você perdeu fumando é: $final";
    