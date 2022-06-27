<!DOCTYPE html>
<html>
<body>

<?php
$arr = array(5, 25,	13,	8,	45,	6,	11);
echo "<pre>";
print_r($arr);
echo "</pre>";

$max=$arr[0];  
for ($i = 1; $i < count($arr); $i++)
{  
    if($arr[$i] > $max){  
        $max = $arr[$i];  
    }   
}  
echo 'Max = ' . $max;
echo nl2br("\n");
$min=$arr[0];  
for ($i = 1; $i < count($arr); $i++)
{  
    if($arr[$i] < $min){  
        $min = $arr[$i];  
    }   
}  
echo 'Min = ' . $min;
echo nl2br("\n");
echo 'Sort array from min to max:';

for($j = 0; $j < count($arr); $j ++) {
    for($i = 0; $i < count($arr)-1; $i ++){
        if($arr[$i] > $arr[$i+1]) {
            $temp = $arr[$i+1];
            $arr[$i+1]=$arr[$i];
            $arr[$i]=$temp;
        }       
    }
}
echo "<pre>";
print_r($arr);
echo "</pre>";

echo 'Sort array from max to min:';

for($j = 0; $j < count($arr); $j ++) {
    for($i = 0; $i < count($arr)-1; $i ++){
        if($arr[$i] < $arr[$i+1]) {
            $temp = $arr[$i+1];
            $arr[$i+1]=$arr[$i];
            $arr[$i]=$temp;
        }       
    }
}
echo "<pre>";
print_r($arr);
echo "</pre>";



?>

</body>
</html>