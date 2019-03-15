<?php
    print"Digite a temperatura em Celsius\n";
    $celsius = fgets(STDIN);

    $fahrenheit = (9*$celsius)/5 + 32;
    print"Temperatura em fahrenheit: $fahrenheit ºF";