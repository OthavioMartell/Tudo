<?php
    print "Quantos quilômetros foram percorridos com o carro? ";
        $km_perc = (float) fgets (STDIN);
    
    print "\nQuantos dias o carro ficou alugado? ";
        
        $dias = (int) fgets (STDIN);
        $novo_dia = 60 * $dias;
        $novo_km = 0.15 * $km_perc;
        $result_final = round($novo_dia + $novo_km,2);
    
    print "\nO preço final ficou por: R$$result_final\n";
?>