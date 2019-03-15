<?php
    print"Qual a área em m² a ser pintada?\n";
    $area = fgets(STDIN);
    $litro = $area/6;
    $lata = ceil(($litro /18) *1.10);
    $galao = ceil(($litro /3.6) *1.10);
    $compraLatas = 80 * $lata;
    $compraGaloes = 25 * $galao;
    $bestBuyLata = ceil($litro /18);
    $bestBuyGalao = ceil(($litro %18) / 3.6);
    $bestMix = ($bestBuyLata *80) + ceil($bestBuyGalao *25);

    print"Compra de Latas: $lata Latas --- Preço $compraLatas \n";
    print"Compra de Galões: $galao Galões --- Preço $compraGaloes \n";
    print"Compra mista: \n     Latas: $bestBuyLata Galões: $bestBuyGalao --- Preço: $bestMix\n";