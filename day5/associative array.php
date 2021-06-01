<?php
// method-1 
$a[0]=1;
$a[1]=2;
$a[2]="java script";
$a["r"]="react";
$a["n"]="node js";

echo $a["r"];

// method 2 
$a = array(
    0 => 1,
    1 => 2,
    "j" => "java script",
    "r" => "react js",
    5 => "node js"
    
);

echo "<br> r for " .$a["r"];

foreach ($a as $value){
    echo "<br> value is $value"  ;
}
foreach ($a as $key => $value){
    echo "<br> key is <b>$key</b> value is <b>$value</b>";
}

echo "<pre>";
 print_r($a);
 echo "</pre>";

 echo "<pre>";
 var_dump($a);
 echo "</pre>";


