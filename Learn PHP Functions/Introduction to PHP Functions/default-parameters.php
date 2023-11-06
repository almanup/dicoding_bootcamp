<?php
//Alman Azizi
function calculateTip($total, $tip = 20)
{
    return $total * (1 + $tip/100);
}
//2255201001
echo calculateTip(100, 25);
echo "\n";
echo calculateTip(100);
echo "\n";
echo calculateTip(65, 15);
//Kelas B

