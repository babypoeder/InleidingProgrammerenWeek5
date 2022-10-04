<?php
$breedte = 5;

for ($x = 1; $x < $breedte*2; $x++){
    if ($x <= $breedte){
        for ($y = 0; $y < $x; $y++){
            print("*");
        }
    }else{
        for ($z = $x; $z < $breedte*2; $z++) {
            print("*");
        }
    }
    print("\n");
}

