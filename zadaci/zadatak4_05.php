<?php

// ispiši zbroj prvih 100 brojeva

$s=0; for($i=1;$i<=100;$i++) $s+=$i; 
echo $s, '<br />';
$s; for($i=1, $s=0;$i<=100; $s+=$i, $i++); 
echo $s, '<br />';
$i=1; $s=0; for( ; $i<=100; $i++){ $s+=$i; }
echo $s, '<br />';
$s=0; for($i=1; ; $i++){ if($i<=100) $s+=$i; else break;} 
echo $s, '<br />';
$s=0; for($i=1;$i<=100;){ $s+=$i; $i++;}
echo $s, '<br />';
$s=0; for($i=1; ; ){ if($i<=100) {$s+=$i; $i++;} else break;}
echo $s, '<br />';
$i=1;$s=0; for( ; $i<=100 ; ){ $s+=$i; $i++;}
echo $s, '<br />';
$i=1;$s=0; for( ; ; $i++){if($i<=100)  $s+=$i; else break;}
echo $s, '<br />';
$i=1;$s=0; for( ;  ; ){if($i<=100) {$s+=$i; $i++;} else break;} 
echo $s, '<br />';
		