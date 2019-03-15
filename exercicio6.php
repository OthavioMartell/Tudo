<?php
    print "Quantos graus (em celcius)? ";
        $cels = (float) fgets (STDIN);
    
        $novocel = $cels / 5;
        $novocel2 = $novocel * 9;
        $faren = $novocel2 + 32;
    print "Está $faren graus fahranheit!\n";
?>