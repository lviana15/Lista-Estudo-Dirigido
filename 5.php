<?php
    print"Digite a distância (Km) da viagem e a velocidade média (Km/h) eserada.\n";
    $distancia = fgets(STDIN);
    $velocidade = fgets(STDIN);

    $tempo = $distancia / $velocidade;
    print"O tempo de viagem vai ser de $tempo horas.";