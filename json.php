<?php
$myObj->name = "John";
$myObj->age = 30;
$myObj->city = "New York";
$name = array("ajay","ram");
$myJSON = json_encode($myObj);
$js = json_encode($name);
echo $myJSON;
var_dump($myJSON);
echo $js;
var_dump($js);
?>