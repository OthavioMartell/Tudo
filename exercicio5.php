<?php
    print "Qual a distância que você percorreu (em quilômetros)? ";
        $dist = (float) fgets (STDIN);
    
    print "\nQual a velocidade média que você percorreu (em quilômetros por hora)? ";
        $velo = (float) fgets (STDIN); 
        $tempo = round($dist / $velo,2);
    
    print "\nO tempo que você levou pra percorrer foi: $tempo\n";
?>