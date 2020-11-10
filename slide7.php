<?php

$a = 0;
$b = 1;
$t = 0;
  
while ($b < 1000) {
	echo $b.PHP_EOL;
        $t = $a;
        $a = $b; 
        $b = $t+$b;
}
?>
