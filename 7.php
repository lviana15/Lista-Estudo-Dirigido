<?php
    print"Digite a quantidade de dias que o carro foi alugado e os km percorridos, respectivamente. \n";
    $dias = fgets(STDIN);
    $km = fgets(STDIN);

    $preco = ($dias * 60) + ($km * 0.15);
    print"O valor a ser pago é de R$$preco\n";