<?php
    print "Digite quantos dias: ";
        $dias = (int) fgets (STDIN);
    
    print "\nDigite quantas horas: ";
        $horas = (int) fgets (STDIN);
   
    print "\nDigite quantos minutos: ";
        $minu = (int) fgets (STDIN);
    
    print "\nDigite quantos segundos: ";
        $seg = (int) fgets (STDIN);
        $seg_dias = $dias * 86400;
        $seg_horas = $horas * 3600;
        $seg_minu = $minu * 60;
        $total = round($seg_dias + $seg_horas + $seg_minu + $seg,2);
   
    
    print "\n\nOs segundos totais ficaram em: $total\n";
?>