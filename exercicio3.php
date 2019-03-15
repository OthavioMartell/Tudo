<?php
    print "Qual o seu salário atual? ";
        $sal_atual = (float) fgets (STDIN);
    
    print "\nQual a porcentagem do aumento? ";
        $porcen = (float) fgets (STDIN);
        $novo_porcen = $porcen / 100;
        $nova_porcen = $sal_atual * $novo_porcen;
        $novo_sal = round($sal_atual + $nova_porcen,2);


    print "\n\nO seu novo salário é: $novo_sal\n";
?>