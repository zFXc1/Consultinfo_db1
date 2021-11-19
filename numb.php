<?php
$a = 0;
for($i = 0 ; $i<1000; $i++){
    if ($i % 3 == 0 or $i % 5 == 0){
        $a+=$i;
    }
}
echo "$a";
?>