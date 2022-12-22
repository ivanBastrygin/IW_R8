<?php  
$number = array(
        0 => array(rand(1,50),rand(1,50),rand(1,50),),
        1 => array(rand(1,50),rand(1,50),rand(1,50)),
        2 => array(rand(1,50),rand(1,50),rand(1,50))
    ); end($number);
    $max = key($number);
    foreach($number as $i => $massiv)
{
foreach($massiv  as  $inner_key => $value)
{
echo "[$i][$inner_key] = $value
";
}
}
    $sum = 0 ;
for ($i = 0; $i <= $max; ++$i) {
    $sum += $number[$i][$i];
}
echo $sum;
?>