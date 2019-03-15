<?php
    print"Digite o valor do salário ";
    $salario = fgets(STDIN);
    print"Digite a porcentagem do salário ";
    $porcentagem = fgets(STDIN)/100;

    $novoSalario = $salario + ($salario * $porcentagem);
    print"Seu novo salário é de $novoSalario";