<?php
    print"Digite o valor do produto ";
    $valor = fgets(STDIN);
    print"Digite o percentual de desconto ";
    $percentual = (fgets(STDIN)/100);

    $desconto = $valor * $percentual;
    $novoValor = $valor - $desconto;
    print"O valor do desconto é $desconto reais, e o preço a pagar é $novoValor";