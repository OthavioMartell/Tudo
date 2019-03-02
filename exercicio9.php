<?php
    print "Quantos metros quadrados tem a área que será pintada?\n";
        $area = (float) fgets (STDIN);
    
        $litros_uti = $area / 6;
    
        $quant_lata = $litros_uti / 18;
        $quant_galao = $litros_uti / 3.6;
        $preco_lata = $quant_lata * 80;
        $preco_galao = $quant_galao * 25;


    print "\nSerão utilizadas $quant_lata latas de tinta por um preço de R$$preco_lata";
    print "\nSerão utilizados $quant_galao galões de tinta por um preço de R$" $preco_galao;
    print "\nA opção mais barata para você é pelo preço de";

        

