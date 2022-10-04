<?php

print("met een for loop\n");
for ($x = 0; $x < 8; $x++ ){
    for ($i = 0; $i < 8; $i++ ){
        print("*");
    }
    print("\n");

}

print("met een while loop\n");


$y = 0;
$z = 0;
while($y < 8){
    while($z < 8){
        print("*");
        $z++;
    }
    print("\n");
    $y++;
    $z = 0;
}