<?php
    print "Qual a distância que você percorreu?\n";
        $dist = (float) fgets (STDIN);
    
    print "\nQual a velocidade média que você percorreu?\n";
        $velo = (float) fgets (STDIN); 

        $tempo = $dist / $velo;
    
    print "\nO tempo que você levou pra percorrer foi: $tempo";