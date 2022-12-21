<?php  
$number = array(
        0 => array(rand(1,50),rand(1,50),rand(1,50),),
        1 => array(rand(1,50),rand(1,50),rand(1,50)),
        2 => array(rand(1,50),rand(1,50),rand(1,50))
    ); end($number);
    $max = key($number);
    $sum = 0 ;
for ($i = 0; $i < $max; ++$i) {
    $sum += $number[$i][$i];
}
echo $sum;
?>