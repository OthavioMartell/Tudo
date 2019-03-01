<?php

    print "Há quantos anos você fuma?";
    $num_de_anos = (int) fgets(STDIN);

    $ano = 365;
    $cigarros = 10;
    $minutos_por_dia = 11*$cigarros;
    $min_totais = $minutos_por_dia*$ano*$num_de_anos;
    $horas = $min_totais/60;
    $dias = round($horas/24);
    $meses = round($dias/30);

        print"\n Você perdeu $dias dias de vida, a não ser que você já tenha morrido. \n Você perdeu aproximadamente $meses meses. \n";


        