<?php
$totaal = 0;
$x = 0;
while($x <= 19){
    $rand = rand(0 , 100);
    $totaal = $totaal + $rand;
    print($rand);
    print("\n");
    $x++;
}


print("totaal: " . $totaal);

