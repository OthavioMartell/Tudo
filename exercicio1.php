<?php
    print "Digite um número em metro que você deseja transformar em milímetros: ";
        $n_m = (float) fgets (STDIN);
        $n_novo = round($n_m * 1000,2);
   
        print "\nO seu número convertido em milímetros é: $n_novo\n";
?>