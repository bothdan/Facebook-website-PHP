<?php 

$balanta = 3000;
$dobanda = 9.99;
$min = 45;
$luni = 0;
do {
$x = $balanta*$dobanda/100/12;
$y = $min-$x;
$balanta = $balanta - $y;
$luni=$luni+1;
//echo " New balance = ".$balanta." | ";
}
while ($balanta>0);
$ani = $luni/12;
echo "Nr luni: ".$luni." Nr ani: ".$ani;
//$x = $balanta*$dobanda/100/12;
//$y = $min-$x;
//$balanta = $balanta - $y;
//echo " New balance = ".$balanta." | ";

?>