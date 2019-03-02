<?php
    print "Qual o seu salário atual?\n"
        $sal_atual = (float) fgets (STDIN);

    print "\nQual a porcentagem do aumento?\n";
        $porcen = (float) fgets (STDIN);

        $nova_porcen = $sal_atual * 0,$porcen;
        $novo_sal = sal_atual + $nova_porcen;

    print "\n\nO seu novo salário é: $novo_sal";