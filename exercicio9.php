<?php
    print "Quantos metros quadrados tem a área que será pintada?\n";
        $area = (float) fgets (STDIN);
    
        $litros_uti = ceil($area / 6);
    
        $qtd_lata = ceil($litros_uti / 18);
        $qtd_galao = ceil($litros_uti / 3.6);
        $preco_lata = ceil($qtd_lata * 80);
        $preco_galao = ceil($qtd_galao * 25);
    
    print "\nSerão utilizadas $qtd_lata lata(s) de tinta por um preço de R$$preco_lata";
    print "\nSerão utilizados $qtd_galao galão(ões) de tinta por um preço de R$$preco_galao";
    //Desculpa pela "c" professor.
?>
        
