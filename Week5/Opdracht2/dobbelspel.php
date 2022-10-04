<?php
$dobbelsteen = rand(1,6);
$x = 1;
$totaal = 0;


    print("het getrokken getal is: " . $dobbelsteen . "\n");
    while($dobbelsteen == 2 || $dobbelsteen == 4 || $dobbelsteen == 6){
        while($x <= $dobbelsteen){
            $kaart = rand(1,52);
            print("De waarde van de getrokken kaart is: " . $kaart);
            print("\n");
            $totaal = $totaal + $kaart;
            $x++;
        }
        $dobbelsteen = rand(1, 6);
        $x = 1;
        print("het getrokken getal is: " . $dobbelsteen . "\n");
}
if ($dobbelsteen == 1 || $dobbelsteen == 3 || $dobbelsteen == 5){
    print("er zijn totaal " . $totaal . " punten gescoord");
}

