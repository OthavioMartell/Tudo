<?php
    print "Qual o valor da mercadoria? ";
        $val_mer_ini = (float) fgets (STDIN);
    
    print "\nQuantos por cento de desconto? ";
        $desc = (int) fgets (STDIN);
        
        $novo_porc = $val_mer_ini * 0,$desc;
        $novo_valor = $val_mer_ini - $novo_porc;

    print "\n\nO novo valor da mercadoria é: $novo_valor";
