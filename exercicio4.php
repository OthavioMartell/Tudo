<?php
    print "Qual o valor da mercadoria? ";
        $val_mer_ini = (float) fgets (STDIN);
    
    print "\nQuantos por cento de desconto? ";
        $desc = (int) fgets (STDIN);
        $novo_desc = $desc / 100;
        
        $novo_porc = $val_mer_ini * $novo_desc;
        $novo_valor = round($val_mer_ini - $novo_porc,2);
    print "\n\nO novo valor da mercadoria é: $novo_valor\n";
?>