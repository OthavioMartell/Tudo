<?php
    print "Qual o seu salário atual?\n"
        $sal_atual = (float) fgets (STDIN);

    print "\nQual a porcentagem do aumento?\n";
        $porcen = (float) fgets (STDIN);

        $novo_porcen = $porcen / 100

        $nova_porcen = $sal_atual * $novo_porcen;
        $novo_sal = sal_atual + $nova_porcen;

    print "\n\nO seu novo salário é: $novo_sal";