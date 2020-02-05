<?php

$bedrag = (int)$argv[1];
if($bedrag == 0){
    echo($bedrag." is geen getal");
}
if(floor($bedrag/10)){
    $aantal = floor($bedrag/10);
    echo($aantal." x 10 euro wisselgeld".PHP_EOL);
    $minBedrag= $aantal*10;
    $bedrag-=$minBedrag;
}
if(floor($bedrag/2)){
    $aantal = floor($bedrag/2);
    echo($aantal." x 2 euro wisselgeld".PHP_EOL);
    $minBedrag= $aantal*2;
    $bedrag-=$minBedrag;
}
