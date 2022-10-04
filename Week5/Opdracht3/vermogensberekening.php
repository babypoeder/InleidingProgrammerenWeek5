<?php
$eindVermogen = 0;

print("Na hoeveel jaar is mijn vermogen verdubbeld bij een bepaalde rente\n");
print("het start vermogen is: ");
$startVermogen = trim(fgets(STDIN));
print("\n");
print("Het rente percentage: ");
$rentePercentage = trim(fgets(STDIN));
print("\n");
$start = $startVermogen;
for($x = 0; $eindVermogen < ($startVermogen * 2); $x++){
    $eenProcent = $start / 100;
    $jaarbedragbij = $rentePercentage * $eenProcent;
    $eindVermogen = $start + $jaarbedragbij;
    $start = $eindVermogen;
}
print("Het eind vermogen is: " . $eindVermogen . "\n");
print("Het aantal jaren is: " . $x );

