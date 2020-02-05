<?php

$hoeveelGeld = (int)$argv[1];
if($hoeveelGeld == 0){
    echo($hoeveelGeld." is geen getal");
}
else{
    echo("1 x ".$hoeveelGeld." euro wisselgeld");
}
