<?php
    print"Digite os dias ";
    $dias=fgets(STDIN);
    print"Digite as horas ";
    $horas=fgets(STDIN);
    print"Digite os minutos ";
    $minutos=fgets(STDIN);
    print"Digite os segundos ";
    $segundos=fgets(STDIN);

    $segundosTotal = ($dias * 86400) + ($horas * 3600) + ($minutos * 60) + $segundos;
    print"Total de segundos: $segundosTotal";