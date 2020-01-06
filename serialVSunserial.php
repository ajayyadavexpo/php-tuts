<?php

$arr = array('1'=>"Ajay",'2'=>"Ram",'3'=>"Shyam",'4',"Ashish");
print_r($arr);

$serial = serialize($arr); // you get output with i = count of array number , a= size of array, s=size of array value

echo "<hr>Serialize array ----> ";
print_r($serial);
echo "<hr>";
echo "<br>unserialize array ----> ";
$un = unserialize($serial);//Your array is already in serialize form you can get back original array by using unserialize.

print_r($un);

?>