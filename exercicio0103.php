<?php

    print "Informe a medida total da tábua (em centímetros): ";
        $med_total = (int) fgets (STDIN);
    
        $quant_m = $med_total / 45;
    print "\nA quantidade de madeiras que você irá conseguir dividir em madeira de 45 cm é: "
          .floor ($quant_m);

        $sobra = $med_total % 45;
    print "\nA quantidade de madeira que irá sobrar em cm é: $sobra cm ";

    
    

    

    