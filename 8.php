<?php
    print"Quantos cigarros você fuma por dia?\n";
    $cigarrosDia = fgets(STDIN);

    print"Há quantos anos você fuma?\n";
    $anosFumando = fgets(STDIN);
    
    $cigarrosFumados = $cigarrosDia *$anosFumando *365;
    $minutosPerdidos = $cigarrosFumados *10;
    $horasPerdidas = $minutosPerdidos /60;
    $diasPerdidos = round($horasPerdidas/24);

    print"Você perdeu $diasPerdidos dias de vida.\n";