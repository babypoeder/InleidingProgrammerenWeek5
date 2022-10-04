<?php
$hoogste = 0;
$x = 0;

while($x < 19){
    $rand = rand(0,100);
    print($rand);
    $x++;
    print("\n");
    if($rand > $hoogste){
        $hoogste = $rand;
    }
}
print("maximum: " . $hoogste);