<?php

    print "Digite o nome do seu cachorro: ";
        $nome = fgets (STDIN);
    print "\nDigite o peso do seu cachorro em kg: ";
        $peso = (float) fgets (STDIN);
    print "\n";

        if ($peso<=2){
            print "$nome late fino: au au";
        }
        elseif (($peso<=10) and ($peso>2)){
            print "$nome tem um puta de um belo latido";
        }
        elseif ($peso>10) {
            print "$nome tem um latido grosso: woof woof";
        }
?>

        

